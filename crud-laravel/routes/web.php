<?php

use App\Http\Controllers\CarrosCotroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
  return view('carros.create');
});


Route::get("/create", [CarrosCotroller::class, 'create'])->name("carro.create");
Route::post("/store", [CarrosCotroller::class, 'store'])->name("carro.store");

Route::get("/dashboard", [CarrosCotroller::class, 'dashboard'])->name("carros.dashboard");

Route::get("/edit/{id}", [CarrosCotroller::class, 'edit'])->name("carros.edit");
Route::put("/update/{id}", [CarrosCotroller::class, 'update'])->name("carros.update");


Route::delete("/delete/{id}", [CarrosCotroller::class, 'destroy'])->name("carros.destroy");
