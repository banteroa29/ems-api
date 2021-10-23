<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
                'name' => $this->name,
                'is_active' => $this->is_active
            ],
            'designations' => DesignationResource::collection($this->designations),
            'links' => [
                'show' => route('departments.show',['department' => $this->id]),
                'delete' => route('departments.destroy',['department' => $this->id]),
                'update' => route('departments.update',['department' => $this->id]),
                'index' => route('departments.index')
            ]
        ];
    }
}
