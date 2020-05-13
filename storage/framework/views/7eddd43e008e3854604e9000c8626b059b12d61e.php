<?php $__env->startSection('content'); ?>


<h1>My Droids</h1>

<form action="<?php echo e(route('admin.users.update', [$user ?? ''])); ?>" method="POST" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    <ul>
        <?php $__empty_1 = true; $__currentLoopData = $droids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $droid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li>
                <label>
                    <input type="checkbox" name="droids[]"
                           value="<?php echo e($droid->class); ?>" <?php echo e($user ?? ''->hasDroid($droid) ? 'checked' : ''); ?>>
                    <?php echo e($droid->class); ?>

                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>no droids</li>
        <?php endif; ?>
    </ul>

    <p>
        <button type="submit">Save</button>
    </p>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rober\dbcl\resources\views/droids/my_droids.blade.php ENDPATH**/ ?>