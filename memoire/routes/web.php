<?php

use App\Http\Controllers\CapteurController;
use App\Http\Controllers\MaisonController;
use App\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formulaire', [MaisonController::class, 'create']);
Route::post('/store_maison',[MaisonController::class,'store']);
Route::get('/allumer_lampe/{id}', [MaisonController::class, 'allumer_lampe']);
Route::get('/eteindre_lampe/{id}', [MaisonController::class, 'eteindre_lampe']);
Route::get('/allumer_ventillateur/{id}', [MaisonController::class, 'allumer_ventillateur']);
Route::get('/eteindre_ventillateur/{id}', [MaisonController::class, 'eteindre_ventillateur']);
Route::get('/detail/{id}', [MonitoringController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

URL::forceScheme('https');