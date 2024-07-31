<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;

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

Route::get('/', [InformationController::class, 'index']);
Route::get('/confirm', [InformationController::class, 'confirm']);
Route::get('/thanks',[InformationController::class, 'thanks']);
Route::get('/register',[InformationController::class, 'register']);
Route::get('/login',[InformationController::class, 'login']);
Route::get('/admin',[InformationController::class, 'admin']);