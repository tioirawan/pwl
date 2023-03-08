<?php

namespace Database\Seeders;

use App\Models\Hoby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hoby::create([
            'name' => 'Programming',
            'description' => 'Programming menyenangkan',
        ]);

        Hoby::create([
            'name' => 'Swimming',
            'description' => 'Saya suka berenang',
        ]);

        Hoby::create([
            'name' => 'Reading',
            'description' => 'Saya !suka membaca',
        ]);

    }
}
