<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'barcode',
        'title',
        'price',
        'unit_id',
    ];

    protected $casts = [
        'photos' => 'array'
    ];

    // relation
    public function unit() {
        return $this->hasOne(Unit::class,'id','unit_id');
    }

}
