<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'brand_id' => $this->id,
            'brand_name' => $this->brand_name,
            'brand_image' => $this->brand_image,
            'rating' => $this->rating,
        ];
    }
}
