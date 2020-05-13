<?php $__env->startSection('content'); ?>
<h1>Add New Droid</h1>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add-droids')): ?>
    <form action="view" method="POST" class="pb-5">
        <div class="input-group">
            <input type="text" name="class">
        </div>
        <button type="submit" class="btn btn-success">Add Droid</button>
        <?php echo csrf_field(); ?>
    </form>
<?php endif; ?>
<h1>View Droids</h1>
      <table class="table text-center">
        <thead class="thead-light">
          <tr>
            <th scope="col">Class</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $droids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $droid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($droid->class); ?></td>

                    <td><a href="<?php echo e('droids.update'); ?>" class="btn btn-success">Build This Droid</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rober\dbcl\resources\views/droids/view.blade.php ENDPATH**/ ?>