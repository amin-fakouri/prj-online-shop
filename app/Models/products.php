<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'pic_url',
        'p_price',
        'location_page'
    ];

    public function sub_cat():BelongsTo
    {
        return $this->belongsTo(SubCategories::class, 'sub_cat_id');
    }

    public function feature():HasMany
    {
        return $this->hasMany(features::class);
    }

    public function user():BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
