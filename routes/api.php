<?php

use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('brand', BrandController::class);