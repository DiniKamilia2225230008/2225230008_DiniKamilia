<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesawatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('pesawats')->insert([
            'Nama' => 'Dini Kamilia',
            'Email' => 'dinikamilia085@gmail.com',
            'NomorTelepon' => '08599535522',
            'AsalDaerah' => 'Cilegon',
        ]);
    }
}
