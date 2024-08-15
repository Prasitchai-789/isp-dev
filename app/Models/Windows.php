<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Windows extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_windows';
    protected $fillable =[
        'version',
        'licensed',
        'type',
        'buy',
        'status',
        'remark',
    ];
}
