<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSite extends Model
{
    use HasFactory;
    protected $fillable = [
        'about',
        'On/oF'
    ];
}
