<?php

namespace App\Models\Customer;

use App\Models\RPO\EMVendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VendorCar extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_POInv';
    protected $fillable = [
        'TypeCarID',
        'VendorCode',
    ];
    protected $primaryKey = 'POInvID'; // ระบุชื่อคอลัมน์ Primary Key ที่ถูกต้อง

    public function emvendor()
    {
        return $this->belongsTo(EMVendor::class, 'VendorCode','VendorCode');
    }
}
