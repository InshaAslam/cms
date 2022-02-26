<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
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

Route::view('/privacy-policy','privacyPolicy');  

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(["auth"])->group(function(){
    Route::get('/addcontact',[ContactController::class,'create'])->name('addcontact');
    Route::post('contact',[ContactController::class,'store']);
    Route::resource('contact',ContactController::class);
    Route::get('logout',[ContactController::class,'logout'])->name('logout');
    Route::get('/list',[ContactController::class,'index'])->name('list');
    Route::get('show/{id}',[ContactController::class,'show'])->name('show');
    Route::get('edit/{id}',[ContactController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[ContactController::class,'update'])->name('update');
    Route::get('delete/{id}',[ContactController::class,'destroy'])->name('delete');
});

Route::group(['middleware'=>['adminAccessablePages','auth']],function(){
    Route::get('/admin-dashboard',[UsersController::class,'show'])->name('admin-dashboard');
    Route::get('/export/csv',[UsersController::class,'export'])->name('export/csv');
    Route::get('users',[UsersController::class,'index'])->name('users');
    Route::get('admin/edit/{id}',[UsersController::class,'edit'])->name('admin/edit');
    Route::put('admin/update/{id}',[UsersController::class,'update'])->name('admin/update');
    Route::get('admin/delete/{id}',[UsersController::class,'destroy'])->name('admin/delete');
});


Route::get('/public/contacts',[ContactController::class,'getPublicContacts'])->name('public/contacts');
Route::get('view/details/{id}',[ContactController::class,'getContactDetails'])->name('view/details');


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

