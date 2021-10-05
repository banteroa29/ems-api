<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_types')->insert([
            'name' => 'Regular Employee',
            'description' => 'A regular employee is similar to an indispensable cog in the corporate machine. Under the law, regular employees are those hired for activities which are necessary or desirable in the usual business of the employer. Therefore, a regular employee enjoys the benefit of security of tenure as guaranteed by the Constitution. This means that the employee cannot simply be terminated, other than those Just and Authorized causes as provided by law. '
        ]);
        DB::table('employee_types')->insert([
            'name' => 'Probationary Employee',
            'description' => 'This category pertains to workers which placed on a probationary status for 6 months, as is customary with the general practice. Here, the employee is in the evaluating or qualifying stage, and he may be converted to regular status if his performance is up to par with the company standard. Such reasonable standards must be made known to the employee at the time of hiring. Also, if such employee is allowed to work beyond the probationary period, even if designated as an extension period, then he is protected by the law and considered as a regular employee.'
        ]);
        DB::table('employee_types')->insert([
            'name' => 'Term Employee',
            'description' => 'Also known as Fixed-Term work, Term employees are those who are hired for a specific period only. The arrival of the date in the contract automatically terminates him as an employee in the company. However, there are 2 elements that should be considered so that term employment contracts will not circumvent security of tenure: First, the fixed period of employment should be knowingly and voluntarily agreed upon by the parties, without any force or pressure affecting his consent. Second, it should appear that the employer and employee dealt with each other on more or less equal terms, with no moral dominance exerted by the employer at the disadvantage of the employee.'
        ]);
        DB::table('employee_types')->insert([
            'name' => 'Project Employee',
            'description' => 'The major distinction between Regular employees and Project employees is that the Project employees are hired for only a “specific project or undertaking”. The length of period and scope of the work must be specified at the time that the employees were hired for the project.The company must however see to it that they comply with the Termination report of project employees. This is compulsory under the law, for failure to do so would indicate that the worker was not a project employee but a regular employee.'
        ]);
        DB::table('employee_types')->insert([
            'name' => 'Seasonal Employee',
            'description' => 'Seasonal employees are those hired for activities which are called to work from time to time. These may include regular seasonal employees, who are temporarily laid off or suspended during the off season. But during Christmas holidays, for instance, when their services may be needed, they are hired by the company. Regular seasonal employees are “not separated from service but merely considered on leave of absence without pay until re-employed.”'
        ]);
        DB::table('employee_types')->insert([
            'name' => 'Casual Employee',
            'description' => 'These workers are hired for work or activities which are merely incidental to the business. It is not indispensable nor primarily related to the line of work of the of the employer. However, casual workers who have rendered at least 1 year of service, whether continuous or not, are deemed to be Regular employees with respect to the work for which they are employed, for as long as the activity exists.'
        ]);
        DB::table('employee_types')->insert([
            'name' => 'Intern',
            'description' => 'Another type of employment you may offer is an internship. Internships are programs where students or other trainees work for a period of time at a business, generally to gain experience or skills.'
        ]);
    }
}
