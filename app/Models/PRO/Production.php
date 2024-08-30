<?php

namespace App\Models\PRO;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Production extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    use SoftDeletes;
    protected $table = 'productions';
    protected $fillable = [
        'id',
        'Date',
        'FFBPurchase',
        'FFBForward',
        'ShiftA',
        'ShiftB',
        'Shift3',
        'PikupRemain',
        'RamRemain',
        'TotalFFB',
        'AvgPikup',
        'FFBGoodQty',
        'StuckIn',
        'Steam',
        'PikupRemain2',
        'RamRemain2',
        'RawFFB',
        'FFBRemain',
        'CS1',
        'CS2',
    ];
}
