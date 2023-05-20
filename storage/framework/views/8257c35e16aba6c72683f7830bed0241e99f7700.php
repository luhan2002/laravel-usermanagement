<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="display-4">Welcome <?php echo e(Auth::user()->name); ?>,</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                
                <?php if(session('msg_success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo e(session('msg_success')); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\user-management-system-master\resources\views/home.blade.php ENDPATH**/ ?>