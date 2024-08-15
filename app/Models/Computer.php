<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_computers';
    protected $fillable =[
        'code_com',
        'cpu',
        'socket',
        'ram',
        'storage',
        'cd_rom',
        'graphice',
        'mainboard',
        'model',
        'service_tag',
        'monitor',
        'os',
        'status',
        'remark',
        'photo',
    ];
}
