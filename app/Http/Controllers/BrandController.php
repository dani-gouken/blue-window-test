<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class BrandController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return BrandResource::collection(Brand::latest()->get());
    }

    public function store(StoreBrandRequest $request): BrandResource
    {
        $brand = new Brand;
        $brand->fill($request->safe()->all());
        $brand->save();
        return new BrandResource($brand);
    }

    public function show(Brand $brand): BrandResource
    {
        return new BrandResource($brand);
    }

    public function update(StoreBrandRequest $request, Brand $brand): BrandResource
    {
        $brand->fill($request->safe()->all());
        $brand->save();
        return new BrandResource($brand);
    }

    public function destroy(Brand $brand): Response
    {
        $brand->delete();
        return response()->make();
    }
}
