<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
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
            'course' => $this->course,
            'institution' => $this->institution,
            'years_completed' => $this->years_completed,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ];
    }
}
