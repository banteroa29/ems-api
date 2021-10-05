<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Operations Department'
        ]);
        
        DB::table('departments')->insert([
            'name' => 'Accounting Department'
        ]);
        
        DB::table('departments')->insert([
            'name' => 'Human Resources Department'
        ]);
        
        DB::table('departments')->insert([
            'name' => 'IT Department'
        ]);
        
         DB::table('departments')->insert([
            'name' => 'Purchasing Department'
        ]);
    }
}
