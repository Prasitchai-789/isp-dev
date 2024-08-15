<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $connection = 'sqlsrv2';
    use HasFactory;
    protected $table = 'Webapp_assets';
    protected $fillable =[
        'code_asset',
        'list_asset',
        'name_asset',
        'category_asset',
        'user_asset',
        'photo_asset',
        'status_asset',
        'buy_asset',
        'remark_asset',
    ];
    protected $dates = ['buy_asset', 'created_at', 'updated_at'];

    // กำหนดความสัมพันธ์กับ CategoryAsset
    public function category()
    {
        return $this->belongsTo(CategoryAsset::class, 'category_asset');
    }
}
