<?php

use App\Http\Controllers\BusinessController;
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
    return view('welcome');
});

Route::get('/business/client', [BusinessController::class, 'client'])->name('business.client');
Route::get('/business/client/index', [BusinessController::class, 'client_index'])->name('business.client_index');
Route::get('/business/client/create', [BusinessController::class, 'client_create'])->name('business.client_create');
Route::POST('/business/client/create', [BusinessController::class, 'client_add'])->name('business.client_add');

Route::get('/business/account', [BusinessController::class, 'account'])->name('business.account');
Route::get('/business/estimate', [BusinessController::class, 'estimate'])->name('business.estimate');
Route::get('/business/lead', [BusinessController::class, 'lead'])->name('business.lead');
Route::get('/business/suggestion', [BusinessController::class, 'suggestion'])->name('business.suggestion');
