<?php

namespace App\Models\CAR;

use App\Models\HRE\Emp;
use App\Models\HRE\Department;
use App\Models\Lacation\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarUse extends Model
{
    use HasFactory;
    protected $table = 'car_uses';
    protected $fillable =[
        'card_id',
        'car_id',
        'user_request',
        'use_job',
        'use_start',
        'use_end',
        'use_distance',
        'use_status',

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
        return $this->belongsTo(CarReport::class, 'car_id', 'id');
    }
    
}
