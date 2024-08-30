<?php

namespace App\Models\RPO;

use App\Models\RPO\EMVendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebappPOInv extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_POInv';
    protected $fillable =
    [
        'POInvID',
        'BillID',
        'DocuDate',
        'VendorCarID',
        'TypeCarID',
        'VendorCode',
        'GoodIB',
        'GoodOB',
        'GoodNet',
        'Price1',
        'Amnt1',
        'StatusBill',
        'Grade',
        'Impurity',
        'Scaler',
        'Docutype',
    ];
    protected $primaryKey = 'POInvID'; // ระบุชื่อคอลัมน์ Primary Key ที่ถูกต้อง
    public function emvendor()
    {
        return $this->belongsTo(EMVendor::class, 'VendorCode','VendorCode');
    }
}
