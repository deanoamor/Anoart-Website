<nav class="navbar py-3 navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="logo" src="<?php echo e(URL::asset('gambar/anoulogo.svg')); ?>" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item align-self-center">
                    <a class="nav-link ms-4" aria-current="page" href="<?php echo e(url('/home')); ?>">Home</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link ms-4" aria-current="page" href="<?php echo e(url('/download')); ?>">Download</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link ms-4 " aria-current="page" href="<?php echo e(url('/about')); ?>">About</a>
                </li>

            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\anoart\resources\views/template/header.blade.php ENDPATH**/ ?>