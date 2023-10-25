<?php

use App\Http\Controllers\data_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[data_controller::class,'welcome_fun']);
Route::get('country_data',[data_controller::class,'country_data_fun']);
Route::get('state_data/{id}',[data_controller::class,'state_data_fun']);
Route::post('add_city_data',[data_controller::class,'add_city_data_fun']);
Route::get('city_data/{id}',[data_controller::class,'city_data_fun']);
Route::post('socity_data',[data_controller::class,'socity_data_fun']);
Route::get('socity_form/{id}',[data_controller::class,'socity_form_fun']);
Route::post('form_data',[data_controller::class,'form_data_fun']);
Route::get('show_all_data',[data_controller::class,'show_all_data_fun']);
Route::get('delete/{id}',[data_controller::class,'delete_fun']);
Route::get('fetch_update_data/{id}',[data_controller::class,'fetch_update_data_fun']);
Route::post('update_data',[data_controller::class,'update_data_fun']);
