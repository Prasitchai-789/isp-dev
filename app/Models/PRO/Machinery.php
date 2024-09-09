<?php

namespace App\Models\PRO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machinery extends Model
{
    use HasFactory;
    protected $table = 'machineries';
    protected $fillable = [
        'name_machinery',
        'number_machinery',
        'register_machinery',
        'job_machinery',
        'agency_machinery',
        'type',
        'status_machinery',
        'plan_machinery',
        'breakdown_machinery',
        'remark_machinery',
        'photo_machinery',
        'start_machinery',
    ];


}
