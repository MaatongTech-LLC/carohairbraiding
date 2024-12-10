<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
    <a href="<?php echo e(route('admin.services.show', $service->id)); ?>" class="d-flex align-items-center justify-content-between">
        <?php if($service->image): ?>
            <div class="rounded-circle overflow-hidden">
                <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($service->image)); ?>" style="object-fit: cover; height: 70px; width: 70px;" />
            </div>
        <?php endif; ?>
        <span class="px-2"><?php echo e($service->name); ?></span>
    </a>
</div>
<?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/services/columns/_service.blade.php ENDPATH**/ ?>