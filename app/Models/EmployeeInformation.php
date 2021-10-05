<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EmployeeInformation extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable = [
        'salary',
        'employee_number',
        'work_email',
        'join_date'
    ];
    
    public function designation() {
        return $this->belongsTo(Designation::class);
    }
    
    public function employeeStatus() {
        return $this->belongsTo(EmployeeStatus::class);
    }
    
}
