<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Backend
Route::group(["prefix" => "/login", "middleware" => "checklogin"], function () {
    Route::get("/", [AuthController::class, "getLogin"]);
    Route::post("/", [AuthController::class, "postLogin"]);
});

Route::group(["prefix" => "admin", "middleware" => "checkadmin"], function () {

    Route::get("/", [AdminController::class, "index"]);
    Route::get("/logout", [AdminController::class, "logout"]);

    Route::group(["prefix" => "product"], function () {
        Route::get("/", [ProductController::class, "index"])->name('product');
        Route::get("/create", [ProductController::class, "create"]);
        Route::post("/store", [ProductController::class, "store"]);
        Route::get("/edit/{id}", [ProductController::class, "edit"]);
        Route::post("/update/{id}", [ProductController::class, "update"]);
        Route::get("/delete/{id}", [ProductController::class, "delete"]);
    });

    Route::group(["prefix"=>"order"], function(){
        Route::get("/", [OrderController::class, "order"])->name('order');;
        Route::get("/details/{id}", [OrderController::class, "details"]);
        Route::get("/processed", [OrderController::class, "processed"]);
    });
});
