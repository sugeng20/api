<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaerahController extends Controller
{
    public function provinces()
    {
       $data =  \Indonesia::allProvinces();

        return ResponseFormatter::success($data, 'Berhasil mengambil data');
    }

    public function cities(Request $request)
    {
        $data =  \Indonesia::findProvince($request->id, ['cities'])->cities;
        return ResponseFormatter::success($data, 'Berhasil mengambil data');
    }

    public function districts(Request $request)
    {
        $data =  \Indonesia::findCity($request->id, ['districts'])->districts;
        return ResponseFormatter::success($data, 'Berhasil mengambil data');
    }

    public function villages(Request $request)
    {
        $data =  \Indonesia::findDistrict($request->id, ['villages'])->villages;
        return ResponseFormatter::success($data, 'Berhasil mengambil data');
    }

    public function allCities(){
        $data =  \Indonesia::allCities();
        return ResponseFormatter::success($data, 'Berhasil mengambil data');
    }
}
