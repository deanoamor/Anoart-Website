<?php

namespace App\Http\Controllers\api;

use App\Models\Data;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getdataapi()
    {
        $data = Data::all();
        return response()->json($data);
    }

    public function getdataapishow($id)
    {
        $data = Data::find($id);
        if (!$data) {
            return response()->json(['pesan' => 'data tidak ditemukan']);
        }
        return response()->json($data);
    }
}
