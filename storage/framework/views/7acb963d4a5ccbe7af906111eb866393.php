<div class="btn-group">
    <button type="button" class="btn btn-primary">Actions</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" style="z-index: 999;">
        <li><a class="dropdown-item" href="<?php echo e(route('admin.categories.show', $category->id)); ?>">Show</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('admin.categories.edit', $category->id)); ?>">Edit</a></li>
        <li><a class="dropdown-item" href="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" data-confirm-delete="true">Delete</a></li>
    </ul>
</div>
<?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/categories/columns/_actions.blade.php ENDPATH**/ ?>