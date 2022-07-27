<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'company_name',
        'product_model',
        'quantity',
        'unit_price',
        'price',
        'discount',
        'total_price',
    ];
}
