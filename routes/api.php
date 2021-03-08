<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GadgetController;

//Api Controller

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[EmployeeController::class,'getdata']);

Route::get("info",[DeveloperController::class,'getdev']);

//gettig data by params
Route::get("productList/{id?}",[ProductController::class,'products']);


Route::post("store",[GadgetController::class,'store']);
