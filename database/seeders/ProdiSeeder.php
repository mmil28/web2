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
            ['fakultas_id'=>1, 'nama_prodi'=>'Sistem Informasi', 5],
            ['fakultas_id'=>1, 'nama_prodi'=>'Teknik Informatika', 5],
            ['fakultas_id'=>1, 'nama_prodi'=>'Sistem Komputer', 5],
            ['fakultas_id'=>2, 'nama_prodi'=>'Manajemen', 5],
            ['fakultas_id'=>2, 'nama_prodi'=>'Kewirausahaan', 5],
            ['fakultas_id'=>2, 'nama_prodi'=>'Bisnis Digital', 5],
        ];
        foreach($prodi as $item){
            \App\Models\Prodi::create($item);
        }
    }
}
