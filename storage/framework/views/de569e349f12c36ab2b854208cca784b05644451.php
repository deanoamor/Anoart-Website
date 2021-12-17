<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <?php echo $__env->make('template/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, <?php echo e(Auth::user()->name); ?> <strong></strong></h5>
                    <a href="<?php echo e(url('/createinilohanjir')); ?>" class="btn btn-success mt-3">Buat post</a>
                    <a href="<?php echo e(url('/trashinilohanjir')); ?>" class="btn btn-danger mt-3">Trash</a>
                    <a href="<?php echo e(url('/logout')); ?>" class="btn btn-danger mt-3 float-end">Logout</a>
                </div>
            </div>
        </div>
        <form class="d-flex justify-content-end mt-4">
            <input class="form-control me-2" type="search" placeholder="Search" style="width: 280px;" aria-label="Search">
            <button class="btn tombol btn-success" type="submit">Search</button>
        </form>

        <div class="row postrow d-flex justify-content-center">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datahome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mx-2 post shadow p-3 mb-5 border-0 rounded">
                <img src="<?php echo e(asset('storage/desain/' . $datahome->data_nama)); ?>" class=" card-img-top" alt="...">
                <a href="/editinilohanjir/<?php echo e($datahome->data_id); ?>" class="btn btn-warning mt-3">Edit</a>
                <a href="/deletebang/<?php echo e($datahome->data_id); ?>" onclick="return confirm('yakin?');" class="btn btn-danger mt-3">Delete</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            <nav class="d-flex justify-content-center ">
                <ul class="pagination ">
                    <?php echo e($data->links()); ?>

                </ul>
            </nav>

        </div>
    </div>

    <footer class="footer">


        <?php echo $__env->make('template/basefoot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\anoart\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>