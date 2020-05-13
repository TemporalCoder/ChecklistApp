

<?php $__env->startSection('content'); ?>
<div class="container">
                <h2>Add New Task</h2>

<form method="POST" action="/task">

    <div class="form-group">
        <textarea name="description" class="form-control"></textarea>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Task</button>
    </div>
<?php echo e(csrf_field()); ?>

</form>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rober\dbcl\resources\views/add.blade.php ENDPATH**/ ?>