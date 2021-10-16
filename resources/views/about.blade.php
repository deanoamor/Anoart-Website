<!doctype html>
<html lang="en">

<head>
    <title>About</title>
    @include('template/base')
</head>

<body>
    @include('template/header')

    <section>
        <div class="container">

            <div class="row">
                <div class="col">
                    <h1 class="basefont colorfontb d-flex justify-content-center marginfont ">About</h1>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <p class="basefont colorfontbl text-center mt-5" style="font-size: 30px;">This website is a place to get design assets that can be used commercially and free.
                        All files are in the svg format and are allowed to change the design or make design assets on this web as the basis for creating new designs.</p>

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