<?php

namespace App\Models\CAR;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCard extends Model
{
    use HasFactory;
    protected $table = 'add_cards';
    protected $fillable =[
        'card_number',
        'car_id',
    ];

    public function carReport()
    {
        return $this->belongsTo(CarReport::class, 'car_id', 'id');
    }
}
