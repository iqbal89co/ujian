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
    public function store() {

    }
}
