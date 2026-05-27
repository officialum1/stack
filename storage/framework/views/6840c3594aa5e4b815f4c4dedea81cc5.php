<section
    id="marketplace-dashboard-update-notice"
    data-endpoint="<?php echo e($endpoint); ?>"
    class="hidden overflow-hidden rounded-[1.4rem] border p-4 lg:p-5"
    style="border-color: rgba(245,158,11,0.26); background:
        radial-gradient(circle at top right, rgba(245,158,11,0.12), transparent 32%),
        linear-gradient(180deg, rgba(255,251,235,0.96), rgba(255,248,235,0.94));"
>
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div class="space-y-3">
            <div class="flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center gap-2 rounded-full border px-3 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em]" style="border-color: rgba(245,158,11,0.26); background: rgba(245,158,11,0.14); color: rgb(146 64 14);">
                    <i class="fa-light fa-arrows-rotate text-[11px]"></i>
                    <?php echo e(__('New update')); ?>

                </span>
                <span
                    id="marketplace-dashboard-update-notice-count"
                    class="inline-flex items-center rounded-full border px-3 py-1.5 text-xs font-semibold"
                    style="border-color: rgba(245,158,11,0.2); color: rgb(120 53 15); background: rgba(255,255,255,0.72);"
                ></span>
            </div>

            <div id="marketplace-dashboard-update-notice-items" class="space-y-2"></div>
            <p id="marketplace-dashboard-update-notice-more" class="hidden text-sm" style="color: rgb(146 64 14);">
                <?php echo e(__('Additional updates are available in Marketplace.')); ?>

            </p>
        </div>

        <div class="flex shrink-0 flex-wrap items-center gap-3">
            <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '9b79a89ad06cf93f362f51a14dcd0300::ui.button','data' => ['href' => route('admin-marketplace.index'),'variant' => 'warning','wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin-marketplace.index')),'variant' => 'warning','wire:navigate' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php echo e(__('Open marketplace')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $attributes = $__attributesOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__attributesOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $component = $__componentOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__componentOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '9b79a89ad06cf93f362f51a14dcd0300::ui.button','data' => ['href' => route('admin-marketplace.packages.index'),'variant' => 'outline','wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin-marketplace.packages.index')),'variant' => 'outline','wire:navigate' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                <?php echo e(__('View packages')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $attributes = $__attributesOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__attributesOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $component = $__componentOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__componentOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
        </div>
    </div>
</section>

<script>
    (() => {
        const root = document.getElementById('marketplace-dashboard-update-notice');
        if (!root || root.dataset.bound === '1') return;
        root.dataset.bound = '1';

        const endpoint = root.dataset.endpoint;
        const countNode = document.getElementById('marketplace-dashboard-update-notice-count');
        const itemsNode = document.getElementById('marketplace-dashboard-update-notice-items');
        const moreNode = document.getElementById('marketplace-dashboard-update-notice-more');

        const render = (notice) => {
            const count = Number(notice?.count || 0);
            const items = Array.isArray(notice?.items) ? notice.items : [];

            if (count < 1) {
                root.classList.add('hidden');
                return;
            }

            root.classList.remove('hidden');

            if (countNode) {
                countNode.textContent = count === 1
                    ? '1 package has a newer version available.'
                    : `${count} packages have newer versions available.`;
            }

            if (itemsNode) {
                itemsNode.innerHTML = items.map((item) => `
                    <div class="flex flex-wrap items-center gap-2 text-sm" style="color: rgb(120 53 15);">
                        <span class="font-semibold">${item.title || ''}</span>
                        <span class="inline-flex items-center rounded-full border px-2.5 py-1 text-xs" style="border-color: rgba(180,83,9,0.18); background: rgba(255,255,255,0.7);">
                            ${item.installed_version || ''} → ${item.latest_version || ''}
                        </span>
                    </div>
                `).join('');
            }

            if (moreNode) {
                moreNode.classList.toggle('hidden', count <= items.length);
            }
        };

        const load = async () => {
            try {
                const response = await fetch(endpoint, {
                    headers: { 'Accept': 'application/json' },
                    credentials: 'same-origin',
                });
                const json = await response.json().catch(() => ({}));

                if (!response.ok || json.status === 0) {
                    root.classList.add('hidden');
                    return;
                }

                render(json.data || {});
            } catch (_) {
                root.classList.add('hidden');
            }
        };

        load();
        window.setInterval(load, 300000);
    })();
</script>
<?php /**PATH C:\Users\officialum1 llc\Downloads\codecanyon-stackposts-social-marketing-tool-v10.0.0-untouched\modules\AdminMarketplace\Providers/../Resources/views/dashboard/update-notice.blade.php ENDPATH**/ ?>