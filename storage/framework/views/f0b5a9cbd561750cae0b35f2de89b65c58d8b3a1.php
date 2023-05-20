<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Country</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Controls</th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr style="backgroundColor:#fff">
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->gender); ?></td>
                    <td><?php echo e(($user->birth_date)? $user->birth_date : 'empty'); ?></td>
                    <td><?php echo e(($user->country)? $user->country : 'empty'); ?></td>
                    <td><?php echo e($user->created_at); ?></td>
                    <td><?php echo e($user->updated_at); ?></td>  
                    <td class="justify-content-center"> 
                        <a href=<?php echo e("users/".$user->id); ?> class="btn btn-info btn-sm text-light">View</a>
                        <a href=<?php echo e("users/edit/".$user->id); ?> class="btn btn-success btn-sm text-light">Edit</a>
                        <form action="<?php echo e(url('users/'.$user->id)); ?>" method="POST" style="display:inline-block">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-light" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="display-3 text-center">No Users Available</div>
            <?php endif; ?>
            </tbody>
        </table>
        
    </div>
        <?php echo e($users->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\user-management-system-master\resources\views/users/index.blade.php ENDPATH**/ ?>