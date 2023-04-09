<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'tioirawan',
            'username' => 'tioirawan',
            'email' => 'tioirawan063@gmail.com',
            'password' => Hash::make('tioirawan123'),
        ]);
    }
}
