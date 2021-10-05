<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_statuses')->insert([
            'name' => 'Active'
        ]);
        DB::table('employee_statuses')->insert([
            'name' => 'Resigned'
        ]);
        DB::table('employee_statuses')->insert([
            'name' => 'Terminated'
        ]);
        DB::table('employee_statuses')->insert([
            'name' => 'Deceased'
        ]);
        DB::table('employee_statuses')->insert([
            'name' => 'Leave of Absence'
        ]);
    }
}
