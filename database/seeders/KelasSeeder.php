<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            ['nama' => 'TI 2A'],
            ['nama' => 'TI 2B'],
            ['nama' => 'TI 2C'],
            ['nama' => 'TI 2D'],
            ['nama' => 'TI 2F'],
            ['nama' => 'TI 2G'],
            ['nama' => 'TI 2H'],
            ['nama' => 'TI 2I'],
        ]);
    }
}
