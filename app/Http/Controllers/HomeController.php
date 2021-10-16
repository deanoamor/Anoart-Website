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

        $data = DB::table('data')->paginate(12);

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


        $data = DB::table('data')->insert([
            'data_nama' => $namafile,
            'data_file' => $namafiledesain,
            'data_title' => $request->namadesain,
        ]);

        return redirect()->route('dashboard')->with('data', $data);
    }

    public function edit($id)
    {
        $data = DB::table('data')->where('data_id', $id)->first();
        return view('admin/edit')->with('data', $data);
    }

    public function update(request $request)
    {
        $dataid = DB::table('data')->where('data_id', $request->id)->first();


        if ($request->file('fotodesainedit') == "" && $request->file('filedesainedit') == "") {

            $data =  DB::table('data')->where('data_id', $request->id)->update([
                'data_title' => $request->namadesainedit,

            ]);
        } elseif ($request->file('fotodesainedit') == "") {

            if ($dataid->data_file == NULL) {
                $filedesainedit = $request->file('filedesainedit');
                $namafiledesainedit = $filedesainedit->getClientOriginalName();
                Storage::putFileAS(
                    'public/file',
                    $filedesainedit,
                    $namafiledesainedit
                );


                $data =  DB::table('data')->where('data_id', $request->id)->update([
                    'data_file' => $namafiledesainedit,
                    'data_title' => $request->namadesainedit,


                ]);
            } else {
                //hapus file lama
                Storage::delete('public/file/' . $dataid->data_file);

                $filedesainedit = $request->file('filedesainedit');
                $namafiledesainedit = $filedesainedit->getClientOriginalName();
                Storage::putFileAS(
                    'public/file',
                    $filedesainedit,
                    $namafiledesainedit
                );

                $data =  DB::table('data')->where('data_id', $request->id)->update([
                    'data_file' => $namafiledesainedit,
                    'data_title' => $request->namadesainedit,


                ]);
            }
        } elseif ($request->file('filedesainedit') == "") {

            if ($dataid->data_nama == null) {
                $fotodesainedit = $request->file('fotodesainedit');
                $namafotodesainedit = $fotodesainedit->getClientOriginalName();
                Storage::putFileAs(
                    'public/desain',
                    $fotodesainedit,
                    $namafotodesainedit
                );


                $data =  DB::table('data')->where('data_id', $request->id)->update([
                    'data_nama' => $namafotodesainedit,
                    'data_title' => $request->namadesainedit,


                ]);
            } else {

                //hapus file lama
                Storage::delete('public/desain/' . $dataid->data_nama);

                $fotodesainedit = $request->file('fotodesainedit');
                $namafotodesainedit = $fotodesainedit->getClientOriginalName();
                Storage::putFileAs(
                    'public/desain',
                    $fotodesainedit,
                    $namafotodesainedit
                );

                $data =  DB::table('data')->where('data_id', $request->id)->update([
                    'data_nama' => $namafotodesainedit,
                    'data_title' => $request->namadesainedit,


                ]);
            }
        } else {
            if ($dataid->data_nama == null && $dataid->data_file == null) {
                $fotodesainedit = $request->file('fotodesainedit');
                $namafotodesainedit = $fotodesainedit->getClientOriginalName();
                Storage::putFileAs(
                    'public/desain',
                    $fotodesainedit,
                    $namafotodesainedit
                );

                $filedesainedit = $request->file('filedesainedit');
                $namafiledesainedit = $filedesainedit->getClientOriginalName();
                Storage::putFileAS(
                    'public/file',
                    $filedesainedit,
                    $namafiledesainedit
                );



                $data =  DB::table('data')->where('data_id', $request->id)->update([
                    'data_file' => $namafiledesainedit,
                    'data_nama' => $namafotodesainedit,
                    'data_title' => $request->namadesainedit,


                ]);
            } else {

                //hapus file lama
                Storage::delete('public/file/' . $dataid->data_file);

                Storage::delete('public/desain/' . $dataid->data_nama);



                $fotodesainedit = $request->file('fotodesainedit');
                $namafotodesainedit = $fotodesainedit->getClientOriginalName();
                Storage::putFileAs(
                    'public/desain',
                    $fotodesainedit,
                    $namafotodesainedit
                );

                $filedesainedit = $request->file('filedesainedit');
                $namafiledesainedit = $filedesainedit->getClientOriginalName();
                Storage::putFileAS(
                    'public/file',
                    $filedesainedit,
                    $namafiledesainedit
                );



                $data =  DB::table('data')->where('data_id', $request->id)->update([
                    'data_file' => $namafiledesainedit,
                    'data_nama' => $namafotodesainedit,
                    'data_title' => $request->namadesainedit,

                ]);
            }
        }
        return redirect()->route('dashboard')->with('data', $data);
    }

    public function hapus($id)
    {

        $dataid = DB::table('data')->where('data_id', $id)->first();
        Storage::delete('public/file/' . $dataid->data_file);

        Storage::delete('public/desain/' . $dataid->data_nama);

        DB::table('data')->where('data_id', $id)->delete();

        return redirect()->route('dashboard');
    }
}
