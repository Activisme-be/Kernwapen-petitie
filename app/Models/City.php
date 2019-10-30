<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $guarded = [];

    public function postal(): BelongsTo
    {
        return $this->belongsTo(Postal::class);
    }

    public function setPostal(Postal $postal): self
    {
        $this->postal()->associate($postal)->save();
        return $this;
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function setProvince(Province $province): self
    {
        $this->province()->associate($province)->save();
        return $this;
    }
}
