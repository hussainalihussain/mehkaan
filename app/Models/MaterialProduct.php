<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_id',
        'product_id',
        'description',
    ];
}
