<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'added_by_user_id',
        'name',
        'type',
        'weight',
        'weight_unit',
        'cost',
        'price',
        'selling_min_price',
        'selling_max_price',
    ];
}
