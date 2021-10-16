<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    @include('template/base')
</head>

<body>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, {{ Auth::user()->name }} <strong></strong></h5>
                    <a href="{{url('/createinilohanjir')}}" class="btn btn-success mt-3">Buat post</a>
                    <a href="{{url('/logout')}}" class="btn btn-danger mt-3 float-end">Logout</a>
                </div>
            </div>
        </div>
        <form class="d-flex justify-content-end mt-4">
            <input class="form-control me-2" type="search" placeholder="Search" style="width: 280px;" aria-label="Search">
            <button class="btn tombol btn-success" type="submit">Search</button>
        </form>

        <div class="row postrow d-flex justify-content-center">
            @foreach($data as $datahome)
            <div class="card mx-2 post shadow p-3 mb-5 border-0 rounded">
                <img src="{{ asset('storage/desain/' . $datahome->data_nama) }}" class=" card-img-top" alt="...">
                <a href="/editinilohanjir/{{ $datahome->data_id }}" class="btn btn-warning mt-3">Edit</a>
                <a href="/deletebang/{{ $datahome->data_id }}" onclick="return confirm('yakin?');" class="btn btn-danger mt-3">Delete</a>
            </div>
            @endforeach



            <nav class="d-flex justify-content-center ">
                <ul class="pagination ">
                    {{ $data->links() }}
                </ul>
            </nav>

        </div>
    </div>

    <footer class="footer">


        @include('template/basefoot')
    </footer>
</body>

</html>