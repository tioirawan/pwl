<?php

namespace Database\Seeders;

use App\Models\MahasiswaModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MahasiswaModel::query()->update([
            'kelas_id' => 1,
        ]);
    }
}
