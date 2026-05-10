<?php

use Illuminate\Support\Facades\Route;

//Route::apiResource('key_values', \App\Http\Controllers\api\KeyValueApiController::class);
Route::get('key_values', [\App\Http\Controllers\api\KeyValueApiController::class, 'index']);
Route::post('key_values', [\App\Http\Controllers\api\KeyValueApiController::class, 'store']);
Route::get('key_values/{key}', [\App\Http\Controllers\api\KeyValueApiController::class, 'show']);