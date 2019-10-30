<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Postal extends Model
{
    protected $quarded = [];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
