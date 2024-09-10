<?php

namespace App\Models\HRE;

use App\Models\CAR\CarReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_Dept';
    protected $fillable =[
        'DeptID',
        'DeptName',
        'DeptShort',

    ];

    public function Emp()
    {
        return $this->hasMany(Emp::class, 'DeptID');
    }
}
