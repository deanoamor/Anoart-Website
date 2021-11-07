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

            <div class="accordion marginfont " id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed basefont colorfontb center-font" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What is this website for?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="basefont colorfontbl text-center  " style="font-size: 20px;">This website is a place to get design assets that can be used commercially and free.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed basefont colorfontb text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What about the copyright of the assets?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="basefont colorfontbl text-center " style="font-size: 20px;">
                                All files are in the svg format and are allowed to change the design or make design assets on this web as the basis for creating new designs.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed basefont colorfontb text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do I contact the website builder?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="basefont colorfontbl text-center " style="font-size: 20px;">
                                All files are in the svg format and are allowed to change the design or make design assets on this web as the basis for creating new designs.</p>
                        </div>
                    </div>
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