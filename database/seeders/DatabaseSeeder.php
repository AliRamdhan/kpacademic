<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'roleUser' => 1 // Assuming 1 corresponds to 'Admin' role
        ]);

        $this->call([
            LectureSeeder::class,
        ]);
        $this->call([
            StudentSeeder::class,
        ]);

        $this->call([
            CoursesSeeder::class,
        ]);

        $this->call([
            PositionsSeeder::class,
        ]);
    }
}
