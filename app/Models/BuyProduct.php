<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'f_name',
        'l_name',
        'phone_number_send_product',
        'phone_number_get_product',
        'now_location',
        'send_location',
        'n_code',
        'get_f_name_product',
        'get_l_name_product',
        'name_product',
        'code_product',
        'cart_or_money',
        'time_send',
    ];
}
