<?php

namespace Database\Seeders;

use App\Models\FamilyMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilyMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamilyMember::factory(5)->create();
    }
}
