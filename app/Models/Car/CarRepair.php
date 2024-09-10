<?php

namespace App\Models\CAR;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRepair extends Model
{
    use HasFactory;
    protected $table = 'car_repairs';
    protected $fillable =[
        'car_id',
        'car_issue',
        'car_plan',
        'car_canDrive',
        'car_lastMaintenanceDate',
        'car_preferredRepairDate',
        'car_garage',
        'car_warrantyInfo',
        'car_additionalNotes',
        'car_requesterName',
    ];
}
