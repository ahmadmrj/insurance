<?php

use App\Http\Controllers\FormController;
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

Route::get('/forms/trucking-quick-quote', [FormController::class, 'truckingQuickQuote']);
Route::post('/forms/trucking-quick-quote', [FormController::class, 'submitQuote']);
