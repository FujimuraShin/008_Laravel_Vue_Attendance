<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{

    protected $table = 'attendance';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //factory(\App\Attendance::class, 50)->create();

        Attendance::factory()
                    ->count(50)
                    ->create();
    }
}
