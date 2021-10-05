<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'photo',
        'personal_email'
    ];
    
    public function personalInformation() {
        return $this->hasOne(EmployeePersonal::class);
    }
    
    public function jobInformation() {
        return $this->hasOne(EmployeeInformation::class);
    }
    
    public function education() {
        return $this->hasMany(EmployeeEducation::class);
    }
    
    public function workExperience() {
        return $this->hasMany(WorkExperience::class);
    }
    
    public function emergencyContact() {
        return $this->hasOne(EmployeeContact::class);
    }
}
