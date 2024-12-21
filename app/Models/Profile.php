<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pic_url',
        'user_name',
        'f_name',
        'l_name',
        'phone_number',
        'e_mail',
        'n_code',
    ];
}
