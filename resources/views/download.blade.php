<!doctype html>
<html lang="en">

<head>
    <title>Download</title>
    @include('template/base')
</head>

<body>
    @include('template/header')

    <section>

        <div class="container">
            <div class="card kartu kartuano border-0 rounded-3 ">
                <div class="row ">


                    <div class="col kartu1 d-flex justify-content-center rounded-3 ">
                        <a class="navbar" href="#">
                            <img class="logo  " src="{{ URL::asset('gambar/anoulogowhite.svg') }}" width="120">
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
            <form class="d-flex justify-content-end mt-4" action="{{url('/download/cari')}}" method="GET">
                <input class="form-control me-2" name="cari" type="search" placeholder="Search" style="width: 280px;" aria-label="Search">
                <button class="btn tombol btn-success" type="submit">Search</button>
            </form>
            <div class="row postrow d-flex justify-content-center">
                @if($data->isNotEmpty())

                @foreach($data as $datahome)


                <div class="card mx-2 post shadow p-3 mb-5 border-0 rounded ">
                    <a href="/download/{{ $datahome->id }}" role="button"> <img src="{{ asset('storage/desain/' . $datahome->data_nama) }}" class=" img-product card-img-top"></a>
                </div>



                @endforeach

                @else
                <div class="col-12 mt-4">
                    <div class="alert alert-danger justify-content-between" role="alert">
                        <h4 class="alert-heading basefont">Sorry, we can't find your data</h4>
                        <hr>
                        <p class="basefont" style="font-size: 20px;"> we couldn't find <b>{{$cari}} </b></p>

                    </div>
                </div>
                @endif



                <nav class="d-flex justify-content-center ">
                    <ul class="pagination ">
                        {{ $data->links() }}
                    </ul>
                </nav>

            </div>
        </div>

    </section>

    <footer class="footer">
        @include('template/footer')

        @include('template/basefoot')
    </footer>
</body>

</html>