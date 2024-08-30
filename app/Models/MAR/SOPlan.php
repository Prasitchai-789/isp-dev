<?php

namespace App\Models\MAR;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SOPlan extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'SOPlan';
    protected $fillable =
    [
        'SOPID',
        'SOPDate',
        'GoodID',
        'GoodName',
        'NumberCar',
        'DriverName',
        'CustID',
        'Recipient',
        'IBWei',
        'OBWei',
        'NetWei',
        'GoodPrice',
        'GoodAmnt',
        'Status',
        'ReceivedDate',
    ];
    public function soplanisp()
    {
        return $this->belongsTo(SOPlanISP::class, 'SOPID', 'SOPID');
    }
}
