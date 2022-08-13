<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\TestController;
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


Route::middleware(['AuthenticationMiddleware'])->group(function(){
  Route::get('test_page', [TestController::class, 'index'])->name('test_page');
  Route::post('save_data', [TestController::class, 'create'])->name('test.create'); 
  Route::get('results/{result_id}', [TestController::class, 'show'])->name('results.show');
  Route::get('results/{result_id}', [TestController::class, 'show'])->name('results.show');
  
    });


Route::get('start_test', [AuthController::class, 'start_test'])->name('start_test');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
