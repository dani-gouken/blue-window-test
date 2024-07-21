<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    use HasFactory;
    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(Brand::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Collection<Brand>
     */
    public function topBrands(): Collection
    {
        return $this->brands()->orderBy('rating', 'desc')
            ->get();
    }
}
