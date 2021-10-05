<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
use App\Models\EmployeeInformation;
use App\Models\EmployeePersonal;
use App\Models\EmployeeEducation;
use App\Models\WorkExperience;
use App\Http\Resources\JobInformationResource;
use App\Http\Resources\PersonalInformationResource;
use App\Http\Resources\EducationResource;
use App\Http\Resources\WorkExperienceResource;
use App\Models\EmployeeContact;
use App\Http\Resources\EmergencyContactResource;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return EmployeeResource::collection($employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        try {
            
            //Save Employee
            $employee = $this->saveEmployee($request);
            //Save Work information
            $this->saveWorkInformation(
                    $employee->id, $request);
            //Save Personal Information
            $this->savePersonalInformation($employee->id, $request);
            //save emergenct contact
            $this->saveContact($employee->id);
            //save educational information
            if(request()->has('course')) {
                $this->saveEducation($employee->id);
            }
            //save work experience
            if(request()->has('company_name')) {
                $this->saveWorkExperience($employee->id);
            }
           
            return new EmployeeResource($employee);

        } catch (Exception $ex) {
            return response()->json([
                'error' => $ex->getMessage()
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return response()->json([
            'employee' => new EmployeeResource($employee),
            'job_information' => new JobInformationResource($employee->jobInformation),
            'personal_information' => new PersonalInformationResource($employee->personalInformation),
            'education' => EducationResource::collection($employee->education),
            'work_experience' => WorkExperienceResource::collection($employee->workExperience),
            'emergency_contact' => ($employee->emergencyContact == null ?
                    null : new EmergencyContactResource($employee->emergencyContact))
        ],201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
    
    private function saveEmployee(Request $request) {
        $employee = new Employee();
        $employee->first_name = $request['first_name'];
        $employee->middle_name = request('middle_name');
        $employee->last_name = $request['last_name'];
        $employee->gender = $request['gender'];
        $employee->photo = $request['photo'];
        $employee->personal_email = $request['personal_email'];
        $employee->save();
        
        return $employee;
    }
    
    private function saveWorkInformation($id,$request) {
        $work_info = new EmployeeInformation();
        $work_info->employee_id = $id;
        $work_info->designation_id = $request['designation_id'];
        $work_info->employee_status_id = $request['employee_status_id'];
        (request()->has('reporting_id') ? $work_info->reporting_id = request('reporting_id') : null);

        $work_info->salary = $request['salary'];
        $work_info->employee_number = $request['employee_number'];
        $work_info->work_email = $request['work_email'];
        $work_info->join_date = $request['join_date'];

        $work_info->save();
        
        return $work_info;
    }
    
    private function savePersonalInformation($id, $request) {
        $personal_info = new EmployeePersonal();
        $personal_info->employee_id = $id;
        $personal_info->address1 = $request['address1'];
        $personal_info->address2 = $request['address2'];
        $personal_info->contact_number = $request['contact_number'];
        $personal_info->birth_date = $request['birth_date'];
        $personal_info->marital_status = $request['marital_status'];
        $personal_info->father_name = $request['father_name'];
        $personal_info->mother_name = $request['mother_name'];
        $personal_info->hobbies = $request['hobbies'];
        $personal_info->blood_group = $request['blood_group'];
        
        $personal_info->save();
        
        return $personal_info;
    }
    
    private function saveEducation($id) {
        foreach (request('course') as $key => $value) {
            $course = $value;
            $institution = request('institution')[$key];
            $years_completed = request('years_completed')[$key];
            $start_date = request('start_date')[$key];
            $end_date = request('end_date')[$key];
            
            $education = new EmployeeEducation();
            $education->employee_id = $id;
            $education->course = $course;
            $education->institution = $institution;
            $education->years_completed = $years_completed;
            $education->start_date = $start_date;
            $education->end_date = $end_date;
            $education->save();
        }
    }
    
    private function saveWorkExperience($id) {
        foreach (request('company_name') as $key => $value) {
            $company_name = $value;
            $designation = request('work_designation')[$key];
            $start_date = request('work_start_date')[$key];
            $end_date = request('work_end_date')[$key];
            
            $work_exp = new WorkExperience();
            $work_exp->employee_id = $id;
            $work_exp->company_name = $company_name;
            $work_exp->designation = $designation;
            $work_exp->start_date = $start_date;
            $work_exp->end_date = $end_date;
            $work_exp->save();
        }
    }
    
    private function validateRequest($request) {
        $marital = array('single', 'married', 'widowed', 'divorced');

         $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|boolean',
            'photo' => 'required|string',
            'personal_email' => 'required|string|email',
            'employee_status_id' => 'required',
            'designation_id' => 'required',
            'salary' => 'required',
            'employee_number' => 'required|unique:employee_information',
            'work_email' => 'required',
            'join_date' => 'required|date',
            'address1' => 'required|string',
            'address2' => 'required|string', 
            'contact_number' => 'required|string',
            'birth_date' => 'required|date',
            'marital_status' =>'required|in:' . implode(',', $marital),
            'father_name' => 'required',
            'mother_name' => 'required',
            'hobbies' => 'required',
            'blood_group' => 'required',
            'course' => 'array',
            'course.*'  => 'required|string',
            'institution' => 'array',
            'institution.*'  => 'required|string',
            'years_completed' => 'array',
            'years_completed.*'  => 'required|integer',
            'start_date' => 'array',
            'start_date.*'  => 'required|date',
            'end_date' => 'array',
            'end_date.*'  => 'required|date',
            'company_name' => 'array',
            'company_name.*'  => 'required|string',
            'work_designation' => 'array',
            'work_designation.*'  => 'required|string',
            'work_start_date' => 'array',
            'work_start_date.*'  => 'required|date',
            'work_end_date' => 'array',
            'work_end_date.*'  => 'required|date',
            'emergency_contact_name' => 'required|string',
            'emergency_contact_relationship' => 'required|string',
            'emergency_contact_number' => 'required|string',
        ]);
    }
    
    public function saveContact($id) {
        $contact = new EmployeeContact();
        $contact->employee_id = $id;
        $contact->name = request('emergency_contact_name');
        $contact->relationship = request('emergency_contact_relationship');
        $contact->contact_number = request('emergency_contact_number');
        $contact->save();
        
        return $contact;
    }
}
