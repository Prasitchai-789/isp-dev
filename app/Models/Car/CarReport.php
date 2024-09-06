<?php

namespace App\Models\CAR;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarReport extends Model
{
    use HasFactory;
    protected $table = 'car_reports';
    protected $fillable =[
        'car_number',
        'car_county',
        'car_type',
        'car_character',
        'car_brand',
        'car_model',
        'car_year',
        'car_color',
        'car_fuel',
        'car_mileage',
        'car_date',
        'car_buy',
        'car_tax',
        'car_insurance',
        'car_photo',
        'car_status',
        'car_details',
    ];
}
