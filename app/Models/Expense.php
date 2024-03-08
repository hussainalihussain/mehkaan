<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'description',
        'date',
        'payment_method',
        'paid_by_name',
        'amount',
    ];
}
