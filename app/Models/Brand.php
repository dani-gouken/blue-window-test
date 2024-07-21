<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brand extends Model
{
    protected $fillable = [
        'brand_name',
        'brand_image',
        'rating',
    ];

    protected $casts = [
        'rating' => 'float'
    ];

    use HasFactory;

    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection<Brand>
     **/
    public static function findByTopRating(): Collection
    {
        return self::orderBy('rating', 'desc')
            ->get();
    }
}
