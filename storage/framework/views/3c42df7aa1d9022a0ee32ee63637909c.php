<?php
    $embedOptions = app(\Modules\AdminSettings\Support\OptionStore::class);
    $embedEnabled = (string) $embedOptions->get('embed_code_status', '0') === '1';
    $embedCode = trim((string) $embedOptions->get('embed_code_guest_body_end', ''));
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($embedEnabled && $embedCode !== ''): ?>
    <?php echo $embedCode; ?>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\officialum1 llc\Downloads\codecanyon-stackposts-social-marketing-tool-v10.0.0-untouched\resources\themes\guest\default/resources/views/partials/embed-code-body.blade.php ENDPATH**/ ?>