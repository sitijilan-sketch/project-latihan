<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700585',
            'nama' => 'Siti Jilan Azzahra',
            'prodi' => 'Sistem Informasi',
            'email' => 'sjilann3@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Aktif',

        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
