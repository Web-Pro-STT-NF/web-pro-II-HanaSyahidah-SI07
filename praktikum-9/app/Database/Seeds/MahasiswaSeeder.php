<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '110121141',
                'nama'              => 'Hana',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '2003-05-02',
                'tempat_lahir'      => 'Jakarta',
                'program_study'     => 'Sistem Informasi',
                'ipk'               => '3.8',
                'created_at'        => Time::now()
            ],
            [
                'nim'               => '110121142',
                'nama'              => 'Ida',
                'jenis_kelamin'     => 'Perempuan',
                'tgl_lahir'         => '2003-02-11',
                'tempat_lahir'      => 'Depok',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.5',
                'created_at'        => Time::now()
            ],
        ];
        
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
