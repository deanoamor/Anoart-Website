<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class clientsideController extends Controller
{
    public function indexclient()
    {

        $data = Data::paginate(8);
        $datacount = Data::count();
        $cari = "";
        return view('download')->with('data', $data)->with('datacount', $datacount)->with('cari', $cari);
    }


    public function caridata(Request $request)
    {
        $cari = $request->cari;


        $data = Data::where('data_title', 'like', "%" . $cari . "%")
            ->paginate();


        return view('download')->with('data', $data)->with('cari', $cari);
    }

    public function getdata($id)
    {

        $datadownload = Data::where('id', $id)->first();

        $file = public_path() . "/storage/file/$datadownload->data_file";
        return Response()->download($file, $datadownload->data_file);



        return redirect()->route('download');
    }
    //
}
