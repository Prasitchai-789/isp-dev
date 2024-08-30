<?php

namespace App\Models\MAR;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOPlanISP extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_SOPalnISPs';
    protected $fillable =
    [
        'SOPID',
        'GoodPrice',
        'GoodAmnt',
        'NetWeiCus',
    ];
    public function soplan()
    {
        return $this->hasMany(SOPlan::class, 'SOPID');
    }
}
