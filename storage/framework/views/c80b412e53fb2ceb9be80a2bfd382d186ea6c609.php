<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <?php echo $__env->make('template/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Login</h3>
                </div>
                <form action="<?php echo e(url('/login/store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <?php if(session('errors')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <?php if(Session::has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                        <?php endif; ?>
                        <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('error')); ?>

                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for=""><strong>Email</strong></label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Password</strong></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Log In</button>
                        <!-- <p class="text-center">Belum punya akun? <a href="<?php echo e(url('/register')); ?>">Register</a> sekarang!</p> -->
                    </div>
                </form>
            </div>
        </div>
    </div>



    <footer class="footer">


        <?php echo $__env->make('template/basefoot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\anoart\resources\views/admin/login.blade.php ENDPATH**/ ?>