<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data = Data::paginate(8);

        return view('admin/dashboard')->with('data', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store(Request $request)
    {

        //desain
        $file = $request->file('fotodesain');
        $namafile = $file->getClientOriginalName();
        Storage::putFileAs(
            'public/desain',
            $file,
            $namafile
        );


        //file
        $filedesain = $request->file('filedesain');
        $namafiledesain = $filedesain->getClientOriginalName();
        Storage::putFileAS(
            'public/file',
            $filedesain,
            $namafiledesain
        );


        $data = Data::insert(array(
            'data_nama' => $namafile,
            'data_file' => $namafiledesain,
            'data_title' => $request->namadesain,
        ));

        return redirect()->route('dashboard')->with('data', $data);
    }

    public function edit($id)
    {
        $data = Data::where('data_id', $id)->first();
        return view('admin/edit')->with('data', $data);
    }

    public function update(request $request)
    {
        $dataid = Data::where('data_id', $request->id)->first();

        $data =  Data::where('data_id', $request->id)->update(array(
            'data_title' => $request->namadesainedit,

        ));

        if (empty($request->file('fotodesainedit'))) {
            $dataid->data_nama = $dataid->data_nama;
        } else {
            Storage::delete('public/desain/' . $dataid->data_nama);

            $fotodesainedit = $request->file('fotodesainedit');
            $namafotodesainedit = $fotodesainedit->getClientOriginalName();
            Storage::putFileAs(
                'public/desain',
                $fotodesainedit,
                $namafotodesainedit
            );

            $data =  Data::where('data_id', $request->id)->update(array(
                'data_nama' => $namafotodesainedit,
            ));
        }



        if (empty($request->file('filedesainedit'))) {
            $dataid->data_file = $dataid->data_file;
        } else {
            Storage::delete('public/file/' . $dataid->data_file);

            $filedesainedit = $request->file('filedesainedit');
            $namafiledesainedit = $filedesainedit->getClientOriginalName();
            Storage::putFileAS(
                'public/file',
                $filedesainedit,
                $namafiledesainedit
            );

            $data =  Data::where('data_id', $request->id)->update(array(
                'data_file' => $namafiledesainedit,
            ));
        }

        return redirect()->route('dashboard')->with('data', $data);
    }

    public function hapus($id)
    {

        $dataid = Data::where('data_id', $id)->first();
        Storage::delete('public/file/' . $dataid->data_file);

        Storage::delete('public/desain/' . $dataid->data_nama);

        Data::where('data_id', $id)->delete();

        return redirect()->route('dashboard');
    }
}
