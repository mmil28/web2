<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fakultas = [
            ['nama_fakultas' => 'Fakultas Ilmu Komputer'],
            ['nama_fakultas' => 'Fakultas Ilmu Manajemen dan Bisnis'],
        ];
        foreach ($fakultas as $item){
            \App\Models\Fakultas::create(attributes: $item);
        }
    }
}
