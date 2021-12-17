<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    @include('template/base')
</head>

<body>
    <div class="container">

        <form class="d-flex justify-content-end mt-4">
            <input class="form-control me-2" type="search" placeholder="Search" style="width: 280px;" aria-label="Search">
            <button class="btn tombol btn-success" type="submit">Search</button>
        </form>
        <a href="{{url('/restoreallbang')}}" class="btn btn-success mt-3">Restore all</a>
        <!-- <a href="{{url('/deletepermanentbangall')}}" onclick="return confirm('yakin?');" class="btn btn-danger mt-3">Delete all</a> -->

        <div class="row postrow d-flex justify-content-center">
            @forelse($data as $datahome)
            <div class="card mx-2 post shadow p-3 mb-5 border-0 rounded">
                <img src="{{ asset('storage/desain/' . $datahome->data_nama) }}" class=" card-img-top" alt="...">
                <a href="/restorebang/{{ $datahome->data_id }}" class="btn btn-success mt-3">Restore</a>
                <a href="/deletepermanentbang/{{ $datahome->data_id }}" onclick="return confirm('yakin?');" class="btn btn-danger mt-3">Delete Permanent</a>
            </div>
            @empty
            <div class="col-12 mt-4">
                <div class="alert alert-danger justify-content-between" role="alert">
                    <h4 class="alert-heading basefont">Data tidak ada</h4>
                    <hr>
                </div>
            </div>
            @endforelse




        </div>
    </div>

    <footer class="footer">


        @include('template/basefoot')
    </footer>
</body>

</html>