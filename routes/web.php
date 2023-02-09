<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CompanyController;

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
    return view('welcome');
});

Route::post('projects', [ProjectController::class, 'store']);

Route::get('houses/download/{house}', [HouseController::class, 'download']);
Route::resource('houses', HouseController::class);

Route::resource('offices', OfficeController::class);

Route::post('shops', [ShopController::class, 'store']);

Route::resource('companies', CompanyController::class);
