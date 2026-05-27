<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sections' => [],
    'mode' => 'desktop',
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
    'sections' => [],
    'mode' => 'desktop',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $icons = [
        'dashboard' => 'fa-light fa-house',
        'blogs' => 'fa-light fa-rss',
        'faq' => 'fa-light fa-messages-question',
        'support' => 'fa-light fa-life-ring',
        'mail' => 'fa-light fa-envelopes-bulk',
        'notification' => 'fa-light fa-bell',
        'proxy' => 'fa-light fa-hard-drive',
        'ai-report' => 'fa-light fa-chart-mixed',
        'ai-template' => 'fa-light fa-brain-circuit',
        'plans' => 'fa-light fa-box-open',
        'money' => 'fa-light fa-coins',
        'coupon' => 'fa-light fa-ticket-percent',
        'affiliate' => 'fa-light fa-handshake-angle',
        'users' => 'fa-light fa-users',
        'user-report' => 'fa-light fa-chart-user',
        'themes' => 'fa-light fa-swatchbook',
        'settings' => 'fa-light fa-sliders',
    ];
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($mode === 'mobile'): ?>
    <div class="mt-6 space-y-4">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <?php
                $sectionItems = collect($section['items'] ?? [])
                    ->flatMap(function ($item) {
                        if (! empty($item['children']) && is_array($item['children'])) {
                            return collect($item['children'])->map(function ($child) use ($item) {
                                $child['mobile_icon'] = $item['icon'] ?? 'dashboard';

                                return $child;
                            });
                        }

                        $item['mobile_icon'] = $item['icon'] ?? 'dashboard';

                        return [$item];
                    })
                    ->values();
            ?>

            <section class="<?php echo e($loop->first ? '' : 'border-t pt-4'); ?>" style="<?php echo e($loop->first ? '' : 'border-color: rgba(var(--theme-border-color-rgb), 0.4);'); ?>">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! empty($section['label'])): ?>
                    <p class="px-2 text-[11px] font-semibold uppercase tracking-[0.24em]" style="color: var(--theme-muted-text-color);">
                        <?php echo e(__($section['label'])); ?>

                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <div class="mt-2 space-y-1">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $sectionItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobileLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <?php
                            $iconKey = $mobileLink['mobile_icon'] ?? 'dashboard';
                            $icon = str_starts_with((string) $iconKey, 'fa-')
                                ? $iconKey
                                : ($icons[$iconKey] ?? $icons['dashboard']);
                            $isActive = (bool) ($mobileLink['active'] ?? false);
                            $isDisabled = (bool) ($mobileLink['disabled'] ?? false);
                            $href = $isDisabled ? '#' : ($mobileLink['route'] ?? '#');
                            $wireNavigate = ! $isDisabled && ! empty($mobileLink['route']);
                            $linkClass = 'group relative flex h-11 items-center rounded-xl pl-[52px] pr-3 text-[14px] font-medium tracking-[0.005em] transition-colors duration-150';
                            $linkClass .= $isDisabled ? ' cursor-default opacity-60' : '';
                            $linkStyle = $isActive
                                ? 'background-color: rgba(var(--theme-accent-rgb), 0.12); color: var(--theme-accent);'
                                : 'color: var(--theme-sidebar-text-color);';
                            $iconWrapStyle = $isActive
                                ? 'border-color: rgba(var(--theme-accent-rgb), 0.16); background-color: rgba(var(--theme-accent-rgb), 0.12); color: var(--theme-accent);'
                                : 'background-color: rgba(var(--theme-border-color-rgb), 0.08); color: var(--theme-sidebar-text-color);';
                        ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($wireNavigate): ?>
                            <a
                                href="<?php echo e($href); ?>"
                                wire:navigate
                                class="<?php echo e($linkClass); ?>"
                                style="<?php echo e($linkStyle); ?>"
                            >
                                <span
                                    class="absolute left-[10px] top-1/2 inline-flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-lg border border-transparent transition-colors duration-100"
                                    style="<?php echo e($iconWrapStyle); ?>"
                                >
                                    <i class="<?php echo e($icon); ?> fa-fw text-[15px] leading-none"></i>
                                </span>
                                <span class="truncate"><?php echo e(__($mobileLink['label'] ?? '')); ?></span>
                            </a>
                        <?php else: ?>
                            <a
                                href="<?php echo e($href); ?>"
                                class="<?php echo e($linkClass); ?>"
                                style="<?php echo e($linkStyle); ?>"
                            >
                                <span
                                    class="absolute left-[10px] top-1/2 inline-flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-lg border border-transparent transition-colors duration-100"
                                    style="<?php echo e($iconWrapStyle); ?>"
                                >
                                    <i class="<?php echo e($icon); ?> fa-fw text-[15px] leading-none"></i>
                                </span>
                                <span class="truncate"><?php echo e(__($mobileLink['label'] ?? '')); ?></span>
                            </a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>
            </section>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </div>
<?php else: ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
        <section class="<?php echo e($loop->first ? '' : 'mt-2.5 border-t border-slate-300/65 pt-2.5 dark:border-slate-800'); ?>" <?php if(! $loop->first): ?> style="border-color: var(--theme-border-color);" <?php endif; ?>>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! empty($section['label'])): ?>
                <div class="h-5 px-2.5">
                    <p class="overflow-hidden text-[10px] font-semibold uppercase tracking-[0.16em] text-slate-500/90"
                        x-cloak
                        x-show="sidebarContentVisible"
                        x-transition:enter="transition ease-out duration-140"
                        x-transition:enter-start="opacity-0 -translate-x-1"
                        x-transition:enter-end="opacity-100 translate-x-0">
                        <?php echo e(__($section['label'])); ?>

                    </p>

                    <div class="flex justify-center overflow-hidden"
                        x-cloak
                        x-show="!sidebarContentVisible"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">
                        <span class="text-slate-400">...</span>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <div class="mt-1 space-y-px">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $section['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php
                        $hasChildren = ! empty($item['children']);
                        $isActive = (bool) ($item['active'] ?? false);
                        $isCurrent = $isActive || collect($item['children'] ?? [])->contains(fn ($child) => $child['active'] ?? false);
                        $isDisabled = (bool) ($item['disabled'] ?? false);
                        $iconKey = $item['icon'] ?? 'dashboard';
                        $icon = str_starts_with($iconKey, 'fa-')
                            ? $iconKey
                            : ($icons[$iconKey] ?? $icons['dashboard']);
                    ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hasChildren): ?>
                        <div x-data="{ open: <?php echo e($isCurrent ? 'true' : 'false'); ?> }" class="rounded-xl">
                            <button
                                type="button"
                                class="group relative flex w-full items-center text-left transition-colors duration-150"
                                x-on:click="!sidebarContentVisible ? null : open = ! open"
                                x-bind:class="sidebarContentVisible
                                    ? '<?php echo e($isCurrent ? 'h-10 rounded-xl pl-[45px] pr-3 text-slate-950 dark:text-white' : 'h-10 rounded-xl pl-[45px] pr-3 text-slate-600 hover:text-slate-950 dark:text-slate-300 dark:hover:text-white'); ?>'
                                    : '<?php echo e($isCurrent ? 'h-10 rounded-none bg-transparent pl-[7px] pr-0 text-slate-950 shadow-none ring-0 dark:text-white' : 'h-10 rounded-none bg-transparent pl-[7px] pr-0 text-slate-600 shadow-none ring-0 dark:text-slate-300'); ?>'"
                                title="<?php echo e(__($item['label'])); ?>"
                            >
                                <span class="absolute left-[7px] top-1/2 inline-flex h-[1.875rem] w-[1.875rem] -translate-y-1/2 items-center justify-center rounded-lg border border-transparent transition-colors duration-100"
                                    x-bind:class="sidebarContentVisible
                                        ? '<?php echo e($isCurrent ? 'shadow-[0_10px_18px_-16px_rgba(var(--theme-accent-rgb),0.32)]' : 'bg-transparent text-slate-500 group-hover:border-[color:rgba(var(--theme-accent-rgb),0.16)] group-hover:bg-[color:rgba(var(--theme-accent-rgb),0.12)] group-hover:text-[var(--theme-accent)] dark:text-slate-300 dark:group-hover:border-[color:rgba(var(--theme-accent-rgb),0.22)] dark:group-hover:bg-[color:rgba(var(--theme-accent-rgb),0.16)] dark:group-hover:text-[var(--theme-accent)]'); ?>'
                                        : '<?php echo e($isCurrent ? 'bg-[var(--theme-accent)] text-white shadow-[0_10px_18px_-14px_rgba(var(--theme-accent-rgb),0.65)] dark:bg-[var(--theme-accent)] dark:text-white' : 'bg-transparent text-slate-600 group-hover:text-slate-900 dark:text-slate-200 dark:group-hover:text-white'); ?>'"
                                    <?php if($isCurrent): ?>
                                        x-bind:style="sidebarContentVisible ? 'border-color: rgba(var(--theme-accent-rgb), 0.16); background-color: rgba(var(--theme-accent-rgb), 0.12); color: var(--theme-accent);' : ''"
                                    <?php endif; ?>>
                                    <i class="<?php echo e($icon); ?> fa-fw text-[16px] leading-none"></i>
                                </span>
                                <span class="min-w-0 truncate text-[13.5px] font-medium tracking-[0.005em] <?php echo e($isCurrent ? 'text-slate-950 dark:text-white' : 'text-slate-700 dark:text-slate-300'); ?>"
                                    x-cloak
                                    x-show="sidebarContentVisible"
                                    x-transition:enter="transition ease-out duration-140"
                                    x-transition:enter-start="opacity-0 -translate-x-1.5"
                                    x-transition:enter-end="opacity-100 translate-x-0"><?php echo e(__($item['label'])); ?></span>
                                <span class="ml-auto inline-flex h-5 w-5 items-center justify-center text-slate-500"
                                    x-cloak
                                    x-show="sidebarContentVisible"
                                    x-transition:enter="transition ease-out duration-120"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100">
                                    <i class="fa-solid text-[10px]" :class="open ? 'fa-minus' : 'fa-plus'"></i>
                                </span>
                            </button>

                            <div class="relative ml-[1.75rem] mt-1 space-y-1 overflow-hidden pl-4 before:absolute before:bottom-1.5 before:left-0 before:top-1.5 before:w-px before:bg-slate-300/75 dark:before:bg-slate-700"
                                x-cloak
                                x-show="open && sidebarContentVisible"
                                x-transition:enter="transition ease-out duration-160"
                                x-transition:enter-start="opacity-0 -translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                    <?php ($childDisabled = (bool) ($child['disabled'] ?? false)); ?>
                                    <a
                                        href="<?php echo e($childDisabled ? '#' : ($child['route'] ?? '#')); ?>"
                                        <?php if(! $childDisabled && ! empty($child['route'])): ?> wire:navigate <?php endif; ?>
                                        class="<?php echo e(($child['active'] ?? false) ? 'text-slate-900 dark:text-white' : 'text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white'); ?> group relative flex items-center rounded-lg px-3 py-1.5 text-[12.5px] font-medium tracking-[0.005em] transition <?php echo e($childDisabled ? 'cursor-default opacity-60' : ''); ?>"
                                    >
                                        <span class="absolute left-0 top-1/2 h-px w-3 -translate-x-[1rem] -translate-y-1/2 <?php echo e(($child['active'] ?? false) ? 'bg-slate-400 dark:bg-slate-500' : 'bg-slate-300/90 dark:bg-slate-700'); ?>"></span>
                                        <span class="truncate"><?php echo e(__($child['label'])); ?></span>
                                    </a>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <a
                            href="<?php echo e($isDisabled ? '#' : ($item['route'] ?? '#')); ?>"
                            <?php if(! $isDisabled && ! empty($item['route'])): ?> wire:navigate <?php endif; ?>
                            class="group relative flex items-center transition-colors duration-150 <?php echo e($isDisabled ? 'cursor-default opacity-60' : ''); ?>"
                            x-bind:class="sidebarContentVisible
                                ? '<?php echo e($isCurrent ? 'h-10 rounded-xl pl-[45px] pr-3 text-slate-950 dark:text-white' : 'h-10 rounded-xl pl-[45px] pr-3 text-slate-600 hover:text-slate-950 dark:text-slate-300 dark:hover:text-white'); ?>'
                                : '<?php echo e($isCurrent ? 'h-10 rounded-none bg-transparent pl-[7px] pr-0 text-slate-950 shadow-none ring-0 dark:text-white' : 'h-10 rounded-none bg-transparent pl-[7px] pr-0 text-slate-600 shadow-none ring-0 dark:text-slate-300'); ?>'"
                            title="<?php echo e(__($item['label'])); ?>"
                        >
                                <span class="absolute left-[7px] top-1/2 inline-flex h-[1.875rem] w-[1.875rem] -translate-y-1/2 items-center justify-center rounded-lg border border-transparent transition-colors duration-100"
                                    x-bind:class="sidebarContentVisible
                                    ? '<?php echo e($isCurrent ? 'shadow-[0_10px_18px_-16px_rgba(var(--theme-accent-rgb),0.32)]' : 'bg-transparent text-slate-500 group-hover:border-[color:rgba(var(--theme-accent-rgb),0.16)] group-hover:bg-[color:rgba(var(--theme-accent-rgb),0.12)] group-hover:text-[var(--theme-accent)] dark:text-slate-300 dark:group-hover:border-[color:rgba(var(--theme-accent-rgb),0.22)] dark:group-hover:bg-[color:rgba(var(--theme-accent-rgb),0.16)] dark:group-hover:text-[var(--theme-accent)]'); ?>'
                                    : '<?php echo e($isCurrent ? 'bg-[var(--theme-accent)] text-white shadow-[0_10px_18px_-14px_rgba(var(--theme-accent-rgb),0.65)] dark:bg-[var(--theme-accent)] dark:text-white' : 'bg-transparent text-slate-600 group-hover:text-slate-900 dark:text-slate-200 dark:group-hover:text-white'); ?>'"
                                <?php if($isCurrent): ?>
                                    x-bind:style="sidebarContentVisible ? 'border-color: rgba(var(--theme-accent-rgb), 0.16); background-color: rgba(var(--theme-accent-rgb), 0.12); color: var(--theme-accent);' : ''"
                                <?php endif; ?>>
                                <i class="<?php echo e($icon); ?> fa-fw text-[16px] leading-none"></i>
                            </span>
                            <span class="min-w-0 truncate text-[13.5px] font-medium tracking-[0.005em] <?php echo e($isCurrent ? 'text-slate-950 dark:text-white' : 'text-slate-700 dark:text-slate-300'); ?>"
                                x-cloak
                                x-show="sidebarContentVisible"
                                x-transition:enter="transition ease-out duration-140"
                                x-transition:enter-start="opacity-0 -translate-x-1.5"
                                x-transition:enter-end="opacity-100 translate-x-0"><?php echo e(__($item['label'])); ?></span>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! empty($item['suffix'])): ?>
                                <span class="text-[12px] text-slate-400 group-hover:text-slate-500"
                                    x-cloak
                                    x-show="sidebarContentVisible"
                                    x-transition:enter="transition ease-out duration-120"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"><?php echo e($item['suffix']); ?></span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </section>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\officialum1 llc\Downloads\codecanyon-stackposts-social-marketing-tool-v10.0.0-untouched\resources\themes/app/default/resources/views/components/layout/sidebar-menu.blade.php ENDPATH**/ ?>