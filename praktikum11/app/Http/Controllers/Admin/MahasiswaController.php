<?php

namespace App\Http\Controllers\Admin;
use App\Models\Mahasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswas'] = Mahasiswa::all();
        return view('mahasiswa',$data);
    }


    public function detail($id)
    {
        $data['mahasiswa'] = Mahasiswa::find($id);
        return view('detailMahasiswa',$data);
    }

}
