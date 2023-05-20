<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    </head>
    <body>
        
        <div class="container-fluid text-center heading-custom">
            <h1 class="display-4">User Management System</h1>
            <a class="btn btn-success" href="<?php echo e(route('register')); ?>">User Registration</a>
            <a class="btn btn-danger " href="<?php echo e(route('login')); ?>">User/Admin Login</a>
        </div>

        
        <link rel="stylesheet" href="<?php echo e(asset('js/app.js')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('js/style.js')); ?>">
    </body>
</html>
<?php /**PATH C:\Users\adones\Downloads\user-management-system-master\resources\views/welcome.blade.php ENDPATH**/ ?>