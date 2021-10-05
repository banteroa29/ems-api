<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'data' => [
                'id' => $this->id,
                'name' => $this->first_name.' '.$this->middle_name.' '
                .$this->last_name,
                'first_name' => $this->first_name,
                'middle_name' => $this->middle_name,
                'last_name' => $this->last_name,
                'employee_id' =>($this->jobInformation == null ? null : $this->jobInformation->employee_number),
                'email' =>  ($this->jobInformation == null ? null : $this->jobInformation->work_email),
                'contact_number' => ($this->personalInformation == null ? null : $this->personalInformation->contact_number)
            ],
            'links' => [
                'show' => route('employees.show',['employee' => $this->id]),
                'delete' => route('employees.destroy',['employee' => $this->id]),
                'update' => route('employees.update',['employee' => $this->id]),
                'index' => route('employees.index')
            ]
        ];
    }
}
