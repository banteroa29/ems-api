<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignationResource extends JsonResource
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
                'is_active' => ($this->is_active === 0 ? 'Inactive' : 'Active'),
                'department' => $this->department->name
            ],
            "links" => [
                'show' => route('designations.show',['designation' => $this->id]),
                'delete' => route('designations.destroy',['designation' => $this->id]),
                'update' => route('designations.update',['designation' => $this->id]),
                'index' => route('designations.index')
            ]
        ];
    }
}
