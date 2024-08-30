<?php

namespace App\Models\Technical;

use App\Models\Car\UseCar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeWork extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_typeworks';
    protected $fillable =[
        'TypeWorkID',
        'TypeWork',
    ];

    public function workOrders()
    {
        return $this->hasMany(UseCar::class, 'TypeWorkID');
    }
}
