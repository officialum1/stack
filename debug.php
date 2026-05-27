<?php
header('Content-Type: text/plain');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "=== STACKPOSTS BOOTSTRAP DEBBUGGER ===\n\n";

// Register shutdown function to catch fatal errors
register_shutdown_function(function() {
    $error = error_get_last();
    if ($error !== null && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        echo "\n!!! FATAL ERROR DETECTED !!!\n";
        echo "Type: " . $error['type'] . "\n";
        echo "Message: " . $error['message'] . "\n";
        echo "File: " . $error['file'] . "\n";
        echo "Line: " . $error['line'] . "\n";
    }
});

try {
    echo "1. Requiring vendor/autoload.php...\n";
    require_once __DIR__ . '/vendor/autoload.php';
    echo "Autoload loaded successfully.\n\n";

    echo "2. Bootstrapping application...\n";
    $app = require_once __DIR__ . '/bootstrap/app.php';
    echo "Application bootstrapped successfully.\n\n";

    echo "3. Capturing Request...\n";
    $request = Illuminate\Http\Request::capture();
    echo "Request captured successfully.\n\n";

    echo "4. Handling Request...\n";
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle($request);
    echo "Request handled successfully!\n";
    echo "Response status: " . $response->getStatusCode() . "\n";
} catch (Throwable $e) {
    echo "\n!!! EXCEPTION CAUGHT !!!\n";
    echo "Message: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString() . "\n";
}
