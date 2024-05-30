<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;
use App\Models\Lectures;
use App\Models\AllocationSupervisor;
class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //   // Create 30 student records
        //   Students::factory()->count(30)->create();

        $allocations = [
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 1, 'userId' => null, 'alocSupervisor' => 1],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 2, 'userId' => null, 'alocSupervisor' => 1],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 3, 'userId' => null, 'alocSupervisor' => 1],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 4, 'userId' => null, 'alocSupervisor' => 1],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 5, 'userId' => null, 'alocSupervisor' => 1],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 6, 'userId' => null, 'alocSupervisor' => 1],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 7, 'userId' => null, 'alocSupervisor' => 2],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 8, 'userId' => null, 'alocSupervisor' => 2],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 9, 'userId' => null, 'alocSupervisor' => 2],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 10, 'userId' => null, 'alocSupervisor' => 2],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 11, 'userId' => null, 'alocSupervisor' => 2],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 12, 'userId' => null, 'alocSupervisor' => 2],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 13, 'userId' => null, 'alocSupervisor' => 3],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 14, 'userId' => null, 'alocSupervisor' => 3],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 15, 'userId' => null, 'alocSupervisor' => 3],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 16, 'userId' => null, 'alocSupervisor' => 3],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 17, 'userId' => null, 'alocSupervisor' => 3],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 18, 'userId' => null, 'alocSupervisor' => 3],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 19, 'userId' => null, 'alocSupervisor' => 4],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 20, 'userId' => null, 'alocSupervisor' => 4],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 21, 'userId' => null, 'alocSupervisor' => 4],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 22, 'userId' => null, 'alocSupervisor' => 4],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 23, 'userId' => null, 'alocSupervisor' => 4],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 24, 'userId' => null, 'alocSupervisor' => 4],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 25, 'userId' => null, 'alocSupervisor' => 5],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 26, 'userId' => null, 'alocSupervisor' => 5],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 27, 'userId' => null, 'alocSupervisor' => 5],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 28, 'userId' => null, 'alocSupervisor' => 5],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 29, 'userId' => null, 'alocSupervisor' => 5],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 30, 'userId' => null, 'alocSupervisor' => 5],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 31, 'userId' => null, 'alocSupervisor' => 6],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 32, 'userId' => null, 'alocSupervisor' => 6],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 33, 'userId' => null, 'alocSupervisor' => 6],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 34, 'userId' => null, 'alocSupervisor' => 6],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 35, 'userId' => null, 'alocSupervisor' => 6],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 36, 'userId' => null, 'alocSupervisor' => 6],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 37, 'userId' => null, 'alocSupervisor' => 7],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 38, 'userId' => null, 'alocSupervisor' => 7],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 39, 'userId' => null, 'alocSupervisor' => 7],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 40, 'userId' => null, 'alocSupervisor' => 7],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 41, 'userId' => null, 'alocSupervisor' => 7],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 42, 'userId' => null, 'alocSupervisor' => 7],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 43, 'userId' => null, 'alocSupervisor' => 8],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 44, 'userId' => null, 'alocSupervisor' => 8],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 45, 'userId' => null, 'alocSupervisor' => 8],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 46, 'userId' => null, 'alocSupervisor' => 8],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 47, 'userId' => null, 'alocSupervisor' => 8],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 48, 'userId' => null, 'alocSupervisor' => 8],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 49, 'userId' => null, 'alocSupervisor' => 9],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 50, 'userId' => null, 'alocSupervisor' => 9],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 51, 'userId' => null, 'alocSupervisor' => 9],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 52, 'userId' => null, 'alocSupervisor' => 9],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 53, 'userId' => null, 'alocSupervisor' => 9],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 54, 'userId' => null, 'alocSupervisor' => 10],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 55, 'userId' => null, 'alocSupervisor' => 10],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 56, 'userId' => null, 'alocSupervisor' => 10],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 57, 'userId' => null, 'alocSupervisor' => 10],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 58, 'userId' => null, 'alocSupervisor' => 10],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 59, 'userId' => null, 'alocSupervisor' => 10],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 60, 'userId' => null, 'alocSupervisor' => 11],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 61, 'userId' => null, 'alocSupervisor' => 11],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 62, 'userId' => null, 'alocSupervisor' => 11],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 64, 'userId' => null, 'alocSupervisor' => 11],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 65, 'userId' => null, 'alocSupervisor' => 11],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 66, 'userId' => null, 'alocSupervisor' => 12],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 67, 'userId' => null, 'alocSupervisor' => 12],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 68, 'userId' => null, 'alocSupervisor' => 12],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 69, 'userId' => null, 'alocSupervisor' => 12],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 70, 'userId' => null, 'alocSupervisor' => 12],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 69, 'userId' => null, 'alocSupervisor' => 12],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 70, 'userId' => null, 'alocSupervisor' => 13],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 71, 'userId' => null, 'alocSupervisor' => 13],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 72, 'userId' => null, 'alocSupervisor' => 13],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 73, 'userId' => null, 'alocSupervisor' => 13],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 74, 'userId' => null, 'alocSupervisor' => 13],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 75, 'userId' => null, 'alocSupervisor' => 14],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 76, 'userId' => null, 'alocSupervisor' => 14],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 77, 'userId' => null, 'alocSupervisor' => 14],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 78, 'userId' => null, 'alocSupervisor' => 14],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 79, 'userId' => null, 'alocSupervisor' => 14],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 80, 'userId' => null, 'alocSupervisor' => 14],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 81, 'userId' => null, 'alocSupervisor' => 15],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 82, 'userId' => null, 'alocSupervisor' => 15],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 83, 'userId' => null, 'alocSupervisor' => 15],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 84, 'userId' => null, 'alocSupervisor' => 15],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 85, 'userId' => null, 'alocSupervisor' => 15],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 86, 'userId' => null, 'alocSupervisor' => 16],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 87, 'userId' => null, 'alocSupervisor' => 16],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 88, 'userId' => null, 'alocSupervisor' => 16],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 89, 'userId' => null, 'alocSupervisor' => 16],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 90, 'userId' => null, 'alocSupervisor' => 16],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 91, 'userId' => null, 'alocSupervisor' => 16],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 92, 'userId' => null, 'alocSupervisor' => 17],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 93, 'userId' => null, 'alocSupervisor' => 17],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 94, 'userId' => null, 'alocSupervisor' => 17],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 95, 'userId' => null, 'alocSupervisor' => 17],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 96, 'userId' => null, 'alocSupervisor' => 17],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 97, 'userId' => null, 'alocSupervisor' => 18],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 98, 'userId' => null, 'alocSupervisor' => 18],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 99, 'userId' => null, 'alocSupervisor' => 18],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 100, 'userId' => null, 'alocSupervisor' => 19],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 101, 'userId' => null, 'alocSupervisor' => 19],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 102, 'userId' => null, 'alocSupervisor' => 19],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 103, 'userId' => null, 'alocSupervisor' => 19],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 104, 'userId' => null, 'alocSupervisor' => 20],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 105, 'userId' => null, 'alocSupervisor' => 20],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 106, 'userId' => null, 'alocSupervisor' => 20],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 107, 'userId' => null, 'alocSupervisor' => 20],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 108, 'userId' => null, 'alocSupervisor' => 20],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 109, 'userId' => null, 'alocSupervisor' => 21],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 110, 'userId' => null, 'alocSupervisor' => 21],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 111, 'userId' => null, 'alocSupervisor' => 21],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 112, 'userId' => null, 'alocSupervisor' => 21],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 113, 'userId' => null, 'alocSupervisor' => 21],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 114, 'userId' => null, 'alocSupervisor' => 22],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 115, 'userId' => null, 'alocSupervisor' => 22],
            ['alocName' => 'Dosen Pembimbing', 'alocStudent' => 116, 'userId' => null, 'alocSupervisor' => 22]
        ];

        // Insert allocation supervisor data
        foreach ($allocations as $allocation) {
            AllocationSupervisor::create($allocation);
        }
    }
}
