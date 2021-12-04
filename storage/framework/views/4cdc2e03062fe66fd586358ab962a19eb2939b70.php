<!doctype html>
<html lang="en">

<head>
    <title>Download</title>
    <?php echo $__env->make('template/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('template/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section>

        <div class="container">
            <div class="card kartu kartuano border-0 rounded-3 ">
                <div class="row ">


                    <div class="col kartu1 d-flex justify-content-center rounded-3 ">
                        <a class="navbar" href="#">
                            <img class="logo  " src="<?php echo e(URL::asset('gambar/anoulogowhite.svg')); ?>" width="120">
                        </a>
                    </div>
                    <div class="col-8 kartu rounded-3 ">
                        <h3 class="copyr">Asset Copyright Terms</h3>

                        <h6 class="copyr1">All design assets on this website may be used commercially provided:</h6>

                        <h6 class="copyr2">- This asset may not be used for anything that is prohibited by law</h6>


                        <h6 class="copyr2">- Because basically this design is basic, you can freely edit or change the shape of this design. </h6>


                        <h6 class="copyr2">- Have fun</h6>


                    </div>



                </div>


            </div>
            <form class="d-flex justify-content-end mt-4" action="<?php echo e(url('/download/cari')); ?>" method="GET">
                <input class="form-control me-2" name="cari" type="search" placeholder="Search" style="width: 280px;" aria-label="Search">
                <button class="btn tombol btn-success" type="submit">Search</button>
            </form>
            <div class="row postrow d-flex justify-content-center">
                <?php if($data->isNotEmpty()): ?>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datahome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <div class="card mx-2 post shadow p-3 mb-5 border-0 rounded ">
                    <a data-bs-toggle="collapse" id="click-start<?php echo e($datahome->data_id); ?>" href="#collapseDownload<?php echo e($datahome->data_id); ?> " role="button" aria-controls="collapseExample"> <img src="<?php echo e(asset('storage/desain/' . $datahome->data_nama)); ?>" class="click-end<?php echo e($datahome->data_id); ?> img-product card-img-top"></a>
                    <div class="collapse " id="collapseDownload<?php echo e($datahome->data_id); ?>">
                        <a href="/download/<?php echo e($datahome->data_id); ?>" class=" center btn btn-primary  ">Download</a>
                    </div>
                </div>



                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php else: ?>
                <div class="col-12 mt-4">
                    <div class="alert alert-danger justify-content-between" role="alert">
                        <h4 class="alert-heading basefont">Sorry, we can't find your data</h4>
                        <hr>
                        <p class="basefont" style="font-size: 20px;"> we couldn't find <b><?php echo e($cari); ?> </b></p>

                    </div>
                </div>
                <?php endif; ?>



                <nav class="d-flex justify-content-center ">
                    <ul class="pagination ">
                        <?php echo e($data->links()); ?>

                    </ul>
                </nav>

            </div>
        </div>

    </section>

    <footer class="footer">
        <?php echo $__env->make('template/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('template/basefoot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\anoart\resources\views/download.blade.php ENDPATH**/ ?>