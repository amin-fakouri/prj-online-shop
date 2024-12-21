<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class features_sub_categories extends Model
{
    use HasFactory;
    protected $fillable =[
        'features_id',
        'sub_categories_id'
    ];
}
