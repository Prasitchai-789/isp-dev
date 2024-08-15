<?php

namespace App\Models\PRO;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;
    protected $table = 'spare_parts';
    protected $fillable =[
        'id_machinery',
        'name_spare',
        'brand_spare',
        'type_spare',
        'model_spare',
        'number_spare',
        'size_spare',
        'lubricant',
        'kw_spare',
        'quantity_spare',
        'status_spare',
        'plan_spare',
        'breakdown_spare',
        'remark_spare',
        'photo_spare',
        'start_spare',
    ];
}
