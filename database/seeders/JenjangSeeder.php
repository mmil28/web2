<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Extension\Attributes\Node\Attributes;
use App\Models\Jenjang;
class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenjang = [
            ['nama_jenjang' => 'Diploma 1'],
            ['nama_jenjang' => 'Diploma 2'],
            ['nama_jenjang' => 'Diploma 3'],
            ['nama_jenjang' => 'Diploma 4'],
            ['nama_jenjang' => 'Strata 1'],
            ['nama_jenjang' => 'Strata 2'],
            ['nama_jenjang' => 'Strata 3'],
        ];

        foreach ($jenjang as $item){
            \App\Models\Jenjang::create(attributes: $item);
        }
    }
}
