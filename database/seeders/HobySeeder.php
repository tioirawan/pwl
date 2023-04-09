<?php

namespace Database\Seeders;

use App\Models\Hobby;
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
        Hobby::create([
            'name' => 'Programming',
            'description' => 'Programming menyenangkan',
        ]);

        Hobby::create([
            'name' => 'Swimming',
            'description' => 'Saya suka berenang',
        ]);

        Hobby::create([
            'name' => 'Reading',
            'description' => 'Saya !suka membaca',
        ]);
    }
}
