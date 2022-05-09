<?php

use App\Http\Controllers\Api\{
    PermissionUserController,
    ResourceController,
    UserController
};
use App\Http\Controllers\Api\Auth\{
    AuthController,
    RegisterController
};
use Illuminate\Support\Facades\Route;

/*
 Auth and Register Routes
*/
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/auth', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function(){

    Route::get('/permissions', [ResourceController::class, 'index']);

    Route::get('/users/permissions', [PermissionUserController::class, 'permissionsUsers']);
    Route::apiResource('/users', UserController::class);
});


Route::get('/', function(){
   return response()->json(['message' => 'ok']);
});
