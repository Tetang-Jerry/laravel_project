<?php

namespace Database\Seeders;

use App\Models\Alpha_transit_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlphaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Alpha_transit_user::factory(20)->create();
    }
}
