<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class features extends Model
{
    use HasFactory;

    public function sub_cat():BelongsToMany
    {
        return $this->belongsToMany(SubCategories::class);
    }

    public function product():HasMany
    {
        return $this->hasMany(products::class);
    }
}
