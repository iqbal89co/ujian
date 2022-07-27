<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('mahasiswas')->truncate();
        $mahasiswa = [
            [
                'nim' => '191402097',
                'nama' => 'Iqbal Fakhriza',
                'no_hp' => '08216234189',
                'jenis_kelamin' => 'laki-laki'
            ],
            [
                'nim' => '191402098',
                'nama' => 'Wanda Khalishah',
                'no_hp' => '0821346389',
                'jenis_kelamin' => 'perempuan'
            ]
            ];
            \DB::table('mahasiswas')->insert($mahasiswa);
    }
}
