<!doctype html>
<html lang="en">

<head>
    <title>Edit</title>
    <?php echo $__env->make('template/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container">
        <div class="card mt-5" style="width: 50rem;">
            <div class="col py-4 px-4">
                <form action="<?php echo e(url('/edit/update')); ?>" enctype="multipart/form-data" method="post">
                    <?php echo e(csrf_field()); ?>

                    <input class="form-control" type="hidden" name="id" id="id" value="<?php echo e($data->data_id); ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="fotodesainedit" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">File</label>
                        <input type="file" class="form-control" name="filedesainedit" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?php echo e($data->data_title); ?>" name="namadesainedit" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">


        <?php echo $__env->make('template/basefoot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\anoart\resources\views/admin/edit.blade.php ENDPATH**/ ?>