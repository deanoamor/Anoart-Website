<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class clientsideController extends Controller
{
    public function indexclient()
    {

        $cari = "";
        $data = DB::table('data')->paginate(12);
        return view('download')->with('data', $data)->with('cari', $cari);
    }


    public function caridata(Request $request)
    {
        $cari = $request->cari;


        $data = DB::table('data')
            ->where('data_title', 'like', "%" . $cari . "%")
            ->paginate();


        return view('download')->with('data', $data)->with('cari', $cari);
    }

    public function getdata($id)
    {

        $datadownload = DB::table('data')->where('data_id', $id)->first();

        $file = public_path() . "/storage/file/$datadownload->data_file";
        return Response()->download($file, $datadownload->data_file);



        return redirect()->route('download');
    }
    //
}
