<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => null,
    'description' => null,
    'width' => 'md',
    'dismissible' => true,
    'closeOnBackdrop' => true,
    'initiallyOpen' => false,
    'bodyClass' => '',
    'footerClass' => '',
    'openEvent' => null,
    'closeEvent' => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title' => null,
    'description' => null,
    'width' => 'md',
    'dismissible' => true,
    'closeOnBackdrop' => true,
    'initiallyOpen' => false,
    'bodyClass' => '',
    'footerClass' => '',
    'openEvent' => null,
    'closeEvent' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $widths = [
        'sm' => 'max-w-[26rem]',
        'md' => 'max-w-lg',
        'lg' => 'max-w-2xl',
        'xl' => 'max-w-4xl',
    ];

    $hasBodyContent = trim((string) $slot) !== '';
    $hasFooter = isset($footer) && trim((string) $footer) !== '';
?>

<div
    x-data="{ open: <?php echo \Illuminate\Support\Js::from((bool) $initiallyOpen)->toHtml() ?> }"
    <?php if($openEvent): ?>
        x-on:<?php echo e($openEvent); ?>.window="open = true"
    <?php endif; ?>
    <?php if($closeEvent): ?>
        x-on:<?php echo e($closeEvent); ?>.window="open = false"
    <?php endif; ?>
    <?php echo e($attributes); ?>

>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($trigger)): ?>
        <div x-on:click="open = true">
            <?php echo e($trigger); ?>

        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <template x-teleport="body">
        <div
            x-cloak
            x-show="open"
            class="fixed inset-0 z-[120] flex items-center justify-center p-4 sm:p-6"
            x-on:keydown.escape.window="open = false"
        >
            <div class="absolute inset-0 bg-white/55 backdrop-blur-[6px] dark:bg-slate-950/55" x-on:click="<?php if($closeOnBackdrop): ?> open = false <?php endif; ?>"></div>

            <div x-show="open" x-transition.opacity.scale.90 class="relative w-full <?php echo e($widths[$width] ?? $widths['md']); ?>">
                <div class="overflow-hidden rounded-[1.2rem] border shadow-[0_32px_80px_-34px_rgba(15,23,42,0.32)]" style="border-color: color-mix(in srgb, var(--theme-border-color) 58%, transparent); background-color: var(--theme-surface-overlay);">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($title || $description): ?>
                        <div class="flex items-start justify-between gap-4 px-5 py-4 sm:px-6 sm:py-5">
                            <div class="min-w-0">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($title): ?>
                                    <h3 class="text-[1.05rem] font-semibold tracking-[-0.02em] text-slate-950 dark:text-white"><?php echo e($title); ?></h3>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($description): ?>
                                    <p class="mt-1 text-[15px] leading-7 text-slate-500 dark:text-slate-400"><?php echo e($description); ?></p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($dismissible): ?>
                                <button type="button" class="text-slate-400 transition hover:text-slate-700 dark:hover:text-slate-200" x-on:click="open = false">
                                    <i class="fa-light fa-xmark text-lg"></i>
                                </button>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hasBodyContent): ?>
                        <div class="max-h-[70vh] overflow-y-auto border-t px-5 py-5 sm:px-6 <?php echo e($bodyClass); ?>" style="border-color: color-mix(in srgb, var(--theme-border-color) 52%, transparent);">
                            <?php echo e($slot); ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hasFooter): ?>
                        <div class="flex items-center justify-end gap-3 border-t bg-slate-50/70 px-5 py-4 sm:px-6 <?php echo e($footerClass); ?>" style="border-color: color-mix(in srgb, var(--theme-border-color) 52%, transparent);">
                            <?php echo e($footer); ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
    </template>
</div>
<?php /**PATH C:\Users\officialum1 llc\Downloads\codecanyon-stackposts-social-marketing-tool-v10.0.0-untouched\resources\themes/app/default/resources/views/components/ui/modal.blade.php ENDPATH**/ ?>