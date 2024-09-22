<?php

namespace App\Models\CAR;

use App\Models\HRE\Department;
use App\Models\Lacation\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarReport extends Model
{
    use HasFactory;
    protected $table = 'car_reports';
    protected $fillable = [
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
        'car_card',
        'car_details',
        'car_department',
    ];
    public function province()
    {
        return $this->belongsTo(Province::class, 'car_county', 'ProvinceID');
    }
   

    public function brand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand', 'id');
    }

    public function character()
    {
        return $this->belongsTo(CarCharacter::class, 'car_character', 'id');
    }

    public function type()
    {
        return $this->belongsTo(CarType::class, 'car_type', 'id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'car_department', 'DeptID');
    }

}
