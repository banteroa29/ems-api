<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\EmployeePersonal;
use App\Models\EmployeeInformation;
use App\Models\EmployeeEducation;
use App\Models\WorkExperience;
use App\Models\EmployeeContact;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()
                ->count(10)
                ->has(EmployeePersonal::factory()->count(1),'personalInformation')
                ->has(EmployeeInformation::factory()->count(1),'jobInformation')
                ->has(EmployeeEducation::factory()->count(3),'education')
                ->has(WorkExperience::factory()->count(rand(1,4)),'workExperience')
                ->has(EmployeeContact::factory()->count(1),'emergencyContact')
                ->create();
    }
}
