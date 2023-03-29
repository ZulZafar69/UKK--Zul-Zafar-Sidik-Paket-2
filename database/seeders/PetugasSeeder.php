<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_petugas' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'telp' => '089615124214',
                'level' => 'admin'
            ],
            [
                'nama_petugas' => 'petugas',
                'username' => 'petugas',
                'password' => bcrypt('123456'),
                'telp' => '089645678954',
                'level' => 'petugas'
            ]
            ];
            Petugas::insert($data);
        
    }
}
