<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    @include('template/base')
</head>

<body>
    @include('template/header')

    <section>
        <div class="container">
            <div class="row top judulano">
                <div class="col align-self-center">
                    <h1 class="mb-4 titleano">
                        Find <strong class="mb-4 titleano2">Your Design Assets </strong>
                        <br>

                    </h1>
                    <a class="btn btn-primary mt-4" href="{{url('/download')}}" role="button">Get started</a>
                </div>
                <div class="col d-flex justify-content-center  gambar">
                    <img width="600" class="d-none d-sm-block" src="{{ URL::asset('gambar/mix.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        @include('template/footer')

        @include('template/basefoot')
    </footer>
</body>

</html>