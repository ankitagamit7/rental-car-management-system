<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\Alogin;
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

Route::get('/w', function () {
    $posts = DB::table('cars')->get();
    return view('welcome',compact('posts'));
    
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('posts',[CarsController::class,'posts']);

 Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');

 

Route::get('alogin', [Alogin::class,'index']);
Route::post('store_datas',[Carbb::class,'store_datas']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/aregister', [Alogin::class, 'aregister'])->name('aregister');
    Route::post('/aregister', [Alogin::class, 'aregisterPost'])->name('aregister');
    Route::get('/alogin', [Alogin::class, 'alogin'])->name('alogin');
    Route::post('/alogin', [Alogin::class, 'aloginPost'])->name('alogin');
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::delete('/alogout', [Alogin::class, 'alogout'])->name('alogout');
});


Route::get('users', [App\Http\Controllers\Admin\Usershow::class, 'records']);
Route::get('edit/{id}', [App\Http\Controllers\Admin\Usershow::class, 'edit']);
Route::get('delete/{id}', [App\Http\Controllers\Admin\Usershow::class, 'delete']);
Route::post('update_data/{id}', [App\Http\Controllers\Admin\Usershow::class, 'update_data']);

Route::get('/car', [App\Http\Controllers\Admin\Addcar::class,'index']);
Route::post('store_data',[App\Http\Controllers\Admin\Addcar::class,'store_data']);
Route::get('carshow', [App\Http\Controllers\Admin\Addcar::class,'show']);
Route::get('caredit/{id}', [App\Http\Controllers\Admin\Addcar::class, 'edit']);
Route::get('cardelete/{id}', [App\Http\Controllers\Admin\Addcar::class, 'delete']);
Route::post('carupdate_data/{id}', [App\Http\Controllers\Admin\Addcar::class, 'carupdate_data']);

//show book
Route::get('showbokings', [App\Http\Controllers\Carbook::class,'show']);
//show contact
Route::get('contactinfo', [App\Http\Controllers\Contacts::class,'records']);

Route::get('/book',[App\Http\Controllers\Carbook::class,'index']);
Route::post('store_datasb',[App\Http\Controllers\Carbook::class,'store_datasb']);
//approve book
Route::get('approve/{id}', [App\Http\Controllers\Admin\Addcar::class, 'approve']);
Route::get('reject/{id}', [App\Http\Controllers\Admin\Addcar::class, 'reject']);


Route::get('/service', function () {
    
    return view('service');
    
});

Route::get('/about', function () {
    
    return view('about');
    
});

Route::get('casd', function () {
    
    return view('cars');
    
});

Route::get('/contac', function () {
    
    return view('contact');
    
});

Route::get('/contact',[App\Http\Controllers\Contacts::class,'index']);
Route::post('store_datasc',[App\Http\Controllers\Contacts::class,'store_datasc']);