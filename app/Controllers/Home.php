<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile($nama = "", $kelas = "", $npm = ""){
        //ketika menggunakan array, untuk mengassign ke suatu nilai ke index itu pake => 
        //index (key) itu yg disebelah kiri panah 'nama'
        //value itu yg disebelah kanan panah
        //dipisahkan oleh tanda koma (,)
        $data = [
            //key     //value
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile', $data);
    }
}