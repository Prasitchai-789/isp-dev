<?php

namespace App\Models\SEC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'prefix',
        'first_name',
        'last_name',
        'id_card',
        'birthday',
        'address',
        'address_moo',
        'district',
        'county',
        'province',
        'car_number',
        'pass_status',
        'pass_dept',
        'pass_contact',
        'pass_remark',
    ];
}
