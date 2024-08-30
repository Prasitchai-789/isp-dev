<?php

namespace App\Models\RPO;

use App\Models\RPO\WebappPOInv;
use App\Models\Customer\VendorCar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EMVendor extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'EMVendor';
    protected $fillable = [
        'VendorName',
        'VendorCode',
        'VendorGroupID',
    ];

    protected $primaryKey = 'VendorID'; // ระบุชื่อคอลัมน์ Primary Key ที่ถูกต้อง
    public function vendorcars()
    {
        return $this->hasMany(VendorCar::class, 'VendorCode','VendorCode');
    }

    public function webapppoinvs()
    {
        return $this->hasMany(WebappPOInv::class, 'VendorCode','VendorCode');
    }
}
