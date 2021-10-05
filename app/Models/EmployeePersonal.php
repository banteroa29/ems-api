<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeePersonal extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'address1',
        'address2', 
        'contact_number',
        'birth_date',
        'marital_status',
        'father_name',
        'mother_name',
        'hobbies',
        'blood_group'
    ];
}
