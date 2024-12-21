<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class features_products extends Model
{
    use HasFactory;
    protected $fillable = [
        'fe_id',
        'pro_id',
        'val'
    ];
}
