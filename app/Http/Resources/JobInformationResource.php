<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobInformationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'department' => $this->designation->department->name,
            'designation' => $this->designation->name,
            'employee_status' => $this->employeeStatus->name,
            'salary' => $this->salary,
            'employee_number' => $this->formatEmployeeId($this->employee_number),
            'work_email' => $this->work_email,
            'join_date' => $this->join_date,
            'salary' => $this->salary
        ];
    }
    
    private function formatEmployeeId($id) {
        $length = 5;
        $char = 0;
        $type = 'd';
        $format = "%{$char}{$length}{$type}"; // or "$010d";
        return sprintf($format,$id);
    }
}
