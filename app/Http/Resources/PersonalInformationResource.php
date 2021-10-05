<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalInformationResource extends JsonResource
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
            'address1' => $this->address1,
            'address2'  => $this->address2, 
            'contact_number' => $this->contact_number,
            'birth_date'  => $this->birth_date,
            'marital_status'  => $this->marital_status,
            'father_name'  => $this->father_name,
            'mother_name'  => $this->mother_name,
            'hobbies'  => $this->hobbies,
            'blood_group'  => $this->blood_group  
        ];
    }
}
