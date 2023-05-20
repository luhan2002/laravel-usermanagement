<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Controls</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr style="backgroundColor:#fff">
                        <td><?php echo e($role->name); ?></td>
                        <td><?php echo e($role->role); ?></td>
                        <td><?php echo e($role->permission); ?></td>
                        <td><?php echo e($role->created_at); ?></td>
                        <td><?php echo e($role->updated_at); ?></td>  
                        <td class="justify-content-center"> 
                            <a href=<?php echo e("users/".$role->user_id); ?> class="btn btn-info btn-sm text-light">View</a>
                            <a href=<?php echo e("users/edit/".$role->user_id); ?> class="btn btn-success btn-sm text-light">Edit</a>
                            <form action="<?php echo e(url('users/'.$role->user_id)); ?>" method="POST" style="display:inline-block">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-light" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="display-3 text-center">No Roles Available</div>
                <?php endif; ?>
                </tbody>
            </table>
            
        </div>
            <?php echo e($roles->links()); ?>

        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.AdminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\user-management-system-master\resources\views/roles/index.blade.php ENDPATH**/ ?>