<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('admin')->middleware('auth')->group(function () {
    // Route::get('/', function () {
    //     // if(Auth::user()->isAdmin==0){
    //     //     return redirect()->route('index');
    //     // }
    //     return view('admin.index');
    // })->name('admin.home');

    Route::get('/',[AdminController::class,'index'])->name('admin.home');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::post('/addseller',[AdminController::class,'addseller'])->name('addseller');

    Route::get('/seller',[AdminController::class,'seller'])->name('seller');
    Route::post('/product',[AdminController::class,'productStore'])->name('productStore');

    Route::get('/usertable',[AdminController::class,'usertable'])->name('usertable');
    Route::get('/sellertable',[AdminController::class,'sellertable'])->name('sellertable');

    Route::delete('/destroyUser/{users}', [AdminController::class,'destroyUser'])->name('destroyUser');
    Route::delete('/destroyProduct/{products}', [AdminController::class,'destroyProduct'])->name('destroyProduct');
});
require __DIR__.'/auth.php';
