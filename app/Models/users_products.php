<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_products extends Model
{
    use HasFactory;
    protected $fillable = [
        'products_id',
        'users_id',
        'number_of_product',
        'code_product',
        'price'
    ];
}
