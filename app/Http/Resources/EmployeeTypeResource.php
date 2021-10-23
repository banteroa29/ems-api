<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeTypeResource extends JsonResource
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
                'show' => route('employee-types.show',['employee_type' => $this->id]),
                'delete' => route('employee-types.destroy',['employee_type' => $this->id]),
                'update' => route('employee-types.update',['employee_type' => $this->id]),
                'index' => route('employee-types.index')
            ]
        ];
    }
}
