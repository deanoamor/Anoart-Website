<!doctype html>
<html lang="en">

<head>
    <title>Edit</title>
    @include('template/base')
</head>

<body>
    <div class="container">
        <div class="card mt-5" style="width: 50rem;">
            <div class="col py-4 px-4">
                <form action="{{url('/edit/update')}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <input class="form-control" type="hidden" name="id" id="id" value="{{ $data->data_id}}">
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
                        <input type="text" class="form-control" value="{{ $data->data_title }}" name="namadesainedit" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">


        @include('template/basefoot')
    </footer>
</body>

</html>