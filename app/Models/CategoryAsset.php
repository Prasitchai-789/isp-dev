<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAsset extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_category_assets';
    protected $fillable =[
        'name',
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class, 'category_asset');
    }
}
