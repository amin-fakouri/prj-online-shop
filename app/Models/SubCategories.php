<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubCategories extends Model
{
    use HasFactory;

    public function cats():BelongsToMany
    {
        return $this->belongsToMany(Categories::class);
    }

    public function feature():BelongsToMany
    {
        return $this->belongsToMany(features::class);
    }
}
