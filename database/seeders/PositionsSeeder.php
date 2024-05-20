<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;
use App\Models\Lectures;
class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Create 30 student records
          Students::factory()->count(30)->create();

          // Create 20 lecture records
          Lectures::factory()->count(20)->create();
    }
}
