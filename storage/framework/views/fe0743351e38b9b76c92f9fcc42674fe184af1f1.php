<?php $__env->startSection('content'); ?>
	<div class="container">
	<h1>Edit the Droid</h1>

<form method="POST" action="/droids/<?php echo e($droids->id); ?>">

	<div class="form-group">
		<textarea name="class" class="form-control"><?php echo e($droids->class); ?></textarea>
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update task</button>
	</div>
<?php echo e(csrf_field()); ?>

</form>



</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rober\dbcl\resources\views/droids/edit.blade.php ENDPATH**/ ?>