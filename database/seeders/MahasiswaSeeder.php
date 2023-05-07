<?php

namespace Database\Seeders;

use App\Models\MahasiswaModel;
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
        MahasiswaModel::create([
            'nim' => '1234567890',
            'nama' => 'John Doe',
            'jk' => 'l',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Jl. Lorem Ipsum',
            'hp' => '081234567890',
        ]);

        MahasiswaModel::create([
            'nim' => '0987654321',
            'nama' => 'Jane Doe',
            'jk' => 'p',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Jl. Lorem Ipsum',
            'hp' => '081234567890',
        ]);
    }
}
