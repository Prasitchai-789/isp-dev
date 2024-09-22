<?php

namespace App\Models\HRE;

use App\Models\CAR\CarReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRequest extends Model
{
    use HasFactory;
    protected $table = 'car_requests';
    protected $fillable =[
        'user_request',
        'job_request',
        'department_request',
        'approver_request',
        'status_request',
        'car_request',
        'additionalNotes_request',
    ];

    public function emp()
    {
        return $this->belongsTo(Emp::class, 'user_request', 'EmpID');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_request', 'DeptID');
    }

    public function car()
    {
        return $this->belongsTo(CarReport::class, 'car_request', 'id');
    }
}
