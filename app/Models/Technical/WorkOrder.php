<?php

namespace App\Models\Technical;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_work_orders';
    protected $fillable = [
        'id',
        'Date',
        'NameOfInformant',
        'Status',
        'TypeWork',
        'Number',
        'MachineName',
        'MachineCode',
        'Detail',
        'Location',
        'WorkStatus',
        'Technician',
        'RepairReport',
        'RepairDate',
        'Remark',
        'Telephone',
        'Image',
    ];


    public function typeWork()
    {
        return $this->belongsTo(TypeWork::class, 'TypeWork', 'TypeWorkID');
    }
}
