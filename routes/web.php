<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::fallback([FrontController::class, 'index']);
