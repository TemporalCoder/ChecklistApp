<?php $__env->startSection('content'); ?>
<?php if(Auth::check()): ?>

<div class="container">
    <div class="row">
        <div class="progress-bar" style="width:100%">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">

        </div>
    </div>

    <?php else: ?>
        <div class="card-body">
            <h3>You need to log in. <a href="/login">Click here to login</a></h3>
        </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rober\dbcl\resources\views/welcome.blade.php ENDPATH**/ ?>