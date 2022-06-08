<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index(){
        //objek model mahasiswa
        $this->mhs1 = new MahasiswaModel();
        $this->mhs2 = new MahasiswaModel();
        $this->mhs3 = new MahasiswaModel();

        //memberi nilai pada objek
        $this->mhs1->id = 1;
        $this->mhs1->nama = "Hana Syahidah";
        $this->mhs1->nim = "21141";
        $this->mhs1->gender = "P";
        $this->mhs1->tmp_lahir = "Jakarta";
        $this->mhs1->tgl_lahir = "02 Mei 2003";
        $this->mhs1->ipk = 3.86;

        $this->mhs2->id = 2;
        $this->mhs2->nama = "Hamidah Zakiyah";
        $this->mhs2->nim = "11101";
        $this->mhs2->gender = "P";
        $this->mhs2->tmp_lahir = "Jakarta";
        $this->mhs2->tgl_lahir = "29 Desember 2000";
        $this->mhs2->ipk = 4.00;

        $this->mhs3->id = 3;
        $this->mhs3->nama = "Aida Nabihah";
        $this->mhs3->nim = "11102";
        $this->mhs3->gender = "P";
        $this->mhs3->tmp_lahir = "Tangerang";
        $this->mhs3->tgl_lahir = "16 Juni 2004";
        $this->mhs3->ipk = 3.95;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        //return view dan mengirim sebuah data array
        return view('mahasiswa/index', $data);
    }
}