<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeStatusResource extends JsonResource
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
            "data" => [
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description
            ],
             "links" => [
                'show' => route('employee-statuses.show',['employee_status' => $this->id]),
                'delete' => route('employee-statuses.destroy',['employee_status' => $this->id]),
                'update' => route('employee-statuses.update',['employee_status' => $this->id]),
                'index' => route('employee-statuses.index')
            ]
        ];
    }
}
