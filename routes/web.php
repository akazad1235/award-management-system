<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwardRegisterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\manageAwardController;
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
route::get  ('/', function (){
    return view('awardRegister');
});
Route::group(['middleware' => 'auth'], function(){

    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->name('award.')->group(function(){
        Route::get('/award/register/list', [manageAwardController::class, 'index'])->name('list');
        Route::get('/award/register/details/{id}', [manageAwardController::class, 'view'])->name('view');
    });

});

Route::get('award/register', [AwardRegisterController::class, 'index']);
Route::post('/award/register', [AwardRegisterController::class, 'store'])->name('award.register');




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
