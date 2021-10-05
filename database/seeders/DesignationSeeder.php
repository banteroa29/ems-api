<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'COO'
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'VP Operations'
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'Operations Director'
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'Operations Manager'
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'Operations Assistant'
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'Quality Control'
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'Safety Manager'
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'name' => 'Enviornmental Manager'
        ]);
        
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'CFO'
        ]);
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'Accounting Manager'
        ]);
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'Accounting Supervisor'
        ]);
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'Senior Accountant'
        ]);
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'Junior Accountant'
        ]);
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'Staff Accountant'
        ]);
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'Bookkeeper'
        ]);
        DB::table('designations')->insert([
            'department_id' => 2,
            'name' => 'Controller'
        ]);
        
        DB::table('designations')->insert([
            'department_id' => 3,
            'name' => 'HR Director'
        ]);
        DB::table('designations')->insert([
            'department_id' => 3,
            'name' => 'Receptionist'
        ]);
        DB::table('designations')->insert([
            'department_id' => 3,
            'name' => 'Recruiting Manager'
        ]);
        DB::table('designations')->insert([
            'department_id' => 3,
            'name' => 'HR Coordinator'
        ]);
        
        
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Buyer'
        ]);
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Commodity Manager'
        ]);
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Procurement Director'
        ]);
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Procurement Officer'
        ]);
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Sourcing Director'
        ]);
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Purchasing Agent'
        ]);
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Materials Manager'
        ]);
        DB::table('designations')->insert([
            'department_id' => 5,
            'name' => 'Procurement Manager'
        ]);
        
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'CTO'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'Hardware Technician'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'Help Desk Analyst'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'Network Administrator/Engineer'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'Business Analyst'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'Project Manager'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'Systems Engineer'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'IT Director'
        ]);
        DB::table('designations')->insert([
            'department_id' => 4,
            'name' => 'IT Staff'
        ]);
        
    }
}
