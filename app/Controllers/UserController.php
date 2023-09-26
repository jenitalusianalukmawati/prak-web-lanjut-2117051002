<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController{
    public function index(){
        //
    }

    public function profile($nama = '', $kelas = '', $npm = ''){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create(){
         $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D'
            ],
         ];

         if (session('validation') != null) {
            $validation = session('validation');
        } else {
            $validation = \Config\Services::validation();
        }

         $data = [
            'kelas' => $kelas,
            'validation' => $validation,
         ];

        return view('create_user', $data);
    }

    public function store(){
        //dd($this->request->getVar());

        // validasi input
        if(!$this->validate([
            'nama' => 'required',
            'npm' => 'required|is_unique[user.npm]',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
            
            //dd($validation); 
            // return redirect()->to(base_url('/user/create'));
        } 

        $userModel = new UserModel();
        $kelasModel = new KelasModel();
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $kelas = $this->request->getPost('kelas');

        $data=[
            'nama' => $nama,
            'npm' => $npm,
            'id_kelas' => $kelas
        ];

        $userModel->saveUser($data);
        $data_new=[
            'nama' => $nama,
            'npm' => $npm,
            'id_kelas' => $kelasModel->find($kelas)['nama_kelas']
        ];

        return view('profile', $data_new);
    }
}