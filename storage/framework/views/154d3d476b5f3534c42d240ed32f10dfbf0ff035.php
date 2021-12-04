<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <?php echo $__env->make('template/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('template/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section>
        <div class="container">
            <div class="row top judulano">
                <div class="col align-self-center">
                    <h1 class="mb-4 titleano animate__animated animate__fadeInLeft">
                        Find <strong class="mb-4 titleano2">Your Design Assets </strong>
                        <br>

                    </h1>
                    <p></p>
                    <a class="btn btn-primary mt-4 animate__animated animate__fadeInLeft" href="<?php echo e(url('/download')); ?>" role="button">Let's start</a>
                </div>
                <div class="col d-flex justify-content-center  gambar ">
                    <img width="550" class=" animate__animated animate__fadeInRight" src="<?php echo e(URL::asset('gambar/mix.svg')); ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <?php echo $__env->make('template/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('template/basefoot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\anoart\resources\views/home.blade.php ENDPATH**/ ?>