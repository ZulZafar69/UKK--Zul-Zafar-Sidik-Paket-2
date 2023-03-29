<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                'nik' => '123',
                'username' => 'mas',
                'nama' => 'masyarakat',
                'password' => bcrypt('123'),
                'telp' => '0896145232425'
            ];

            Masyarakat::insert($data);
    }
}
