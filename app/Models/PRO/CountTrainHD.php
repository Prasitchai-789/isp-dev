<?php

namespace App\Models\PRO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountTrainHD extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_CountTrainHD';
    protected $primaryKey = 'CTID';
    protected $fillable = [
        'CTID',
        'CTNo',
        'CTDateStart',
        'CTDateEnd',
        'CTTimeStart',
        'CTTimeEnd',
        'CTAmnt',
        'CTGroupWork',
        'CTShift',
        'CTRemarks',
    ];
}
