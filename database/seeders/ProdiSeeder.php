<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = [
            ['fakultas_id'=>1, 'nama_prodi'=>'Sistem Informasi', 'jenjang_id' => 5],
            ['fakultas_id'=>1, 'nama_prodi'=>'Teknik Informatika', 'jenjang_id' => 5],
            ['fakultas_id'=>1, 'nama_prodi'=>'Sistem Komputer', 'jenjang_id' => 5],
            ['fakultas_id'=>2, 'nama_prodi'=>'Manajemen', 'jenjang_id' => 5],
            ['fakultas_id'=>2, 'nama_prodi'=>'Kewirausahaan', 'jenjang_id' => 5],
            ['fakultas_id'=>2, 'nama_prodi'=>'Bisnis Digital', 'jenjang_id' => 5],
        ];
        foreach($prodi as $item){
            \App\Models\Prodi::create($item);
        }
    }
}
