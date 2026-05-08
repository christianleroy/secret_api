<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('keys', \App\Http\Controllers\api\KeyApiController::class);
