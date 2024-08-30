<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UseCar extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    use SoftDeletes;
    protected $table = 'Webapp_usecars';
    protected $fillable =[
        'id',
        'Date',
        'CardEmp',
        'EmpCode',
        'Mission',
        'CardCar',
        'NumberCar',
        'DeptIDEmp',
        'MileageA',
        'MileageB',
        'Status',
        'Distance',
        'Remark',

    ];
    public function emp()
    {
        return $this->belongsTo('App\Models\Emp', 'EmpCode', 'EmpCode');
    }
}
