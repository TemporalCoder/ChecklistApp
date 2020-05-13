<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">View all Droids</div>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-droids')): ?>
        
    <?php endif; ?>
    <div class="card-header">My Droids</div>

    <div class="card-body">
        <?php $__currentLoopData = $droids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $droid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($droid->class); ?></li>
        <li><img src="<?php echo e($droid->path); ?>" class="img-fluid"></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rober\dbcl\resources\views/dashboard.blade.php ENDPATH**/ ?>