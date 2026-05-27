<?php
header('Content-Type: text/plain');

echo "=== STACKPOSTS DIAGNOSTICS ===\n\n";

echo "PHP Version: " . phpversion() . "\n";
echo "Operating System: " . PHP_OS . "\n\n";

$extensions = ['pdo_mysql', 'mbstring', 'openssl', 'curl', 'gd', 'zip', 'xml', 'fileinfo'];
echo "=== Required Extensions ===\n";
foreach ($extensions as $ext) {
    echo "$ext: " . (extension_loaded($ext) ? "ENABLED" : "DISABLED (WARNING)") . "\n";
}
echo "\n";

echo "=== Files & Permissions ===\n";
echo ".env exists: " . (file_exists(__DIR__ . '/.env') ? "YES" : "NO (CRITICAL)") . "\n";
if (file_exists(__DIR__ . '/.env')) {
    echo ".env size: " . filesize(__DIR__ . '/.env') . " bytes\n";
}
echo "storage/ is writable: " . (is_writable(__DIR__ . '/storage') ? "YES" : "NO (WARNING)") . "\n";
echo "bootstrap/cache/ is writable: " . (is_writable(__DIR__ . '/bootstrap/cache') ? "YES" : "NO (WARNING)") . "\n\n";

echo "=== Database Connection ===\n";
if (file_exists(__DIR__ . '/.env')) {
    // Parse .env manually line by line to avoid standard parse_ini_file issues with unquoted hashes
    $env = [];
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = array_pad(explode('=', $line, 2), 2, null);
        if ($name !== null) {
            $env[trim($name)] = trim($value, " \t\n\r\0\x0B\"'");
        }
    }
    
    $host = isset($env['DB_HOST']) ? $env['DB_HOST'] : '';
    $db = isset($env['DB_DATABASE']) ? $env['DB_DATABASE'] : '';
    $user = isset($env['DB_USERNAME']) ? $env['DB_USERNAME'] : '';
    $pass = isset($env['DB_PASSWORD']) ? $env['DB_PASSWORD'] : '';
    
    echo "Configured Database Host: $host\n";
    echo "Configured Database Name: $db\n";
    echo "Configured Database User: $user\n";
    
    try {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_TIMEOUT => 5];
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo "Database Connection Status: SUCCESSFUL!\n";
    } catch (Exception $e) {
        echo "Database Connection Status: FAILED! Error: " . $e->getMessage() . "\n";
    }
} else {
    echo "Skipping DB check (no .env found)\n";
}
echo "\n";

echo "=== Laravel Logs (Last 20 lines) ===\n";
$logPath = __DIR__ . '/storage/logs/laravel.log';
if (file_exists($logPath)) {
    $lines = file($logPath);
    $last_lines = array_slice($lines, -20);
    echo implode("", $last_lines);
} else {
    echo "No laravel.log file found yet.\n";
}
echo "\n";

echo "=== Apache/LiteSpeed Server error_log ===\n";
$serverLogPath = __DIR__ . '/error_log';
if (file_exists($serverLogPath)) {
    $lines = file($serverLogPath);
    $last_lines = array_slice($lines, -30);
    echo implode("", $last_lines);
} else {
    echo "No server error_log file found in root.\n";
}

