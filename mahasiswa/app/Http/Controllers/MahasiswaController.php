<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data = Mahasiswa::all();
        return ApiFormatter::createApi(200, "success", $data);
    }
    public function store(Request $request) {
        $data = new Mahasiswa();
        $data->nim = $request->nim;
        $data->nama = $request->nama;
        $data->no_hp = $request->no_hp;
        $data->jenis_kelamin = $request->jenis_kelamin;
        if($data->save()) {
            return ApiFormatter::createApi(200, "success", $data);
        } else {
            return ApiFormatter::createApi(400, "failed");
        }

    }
}
