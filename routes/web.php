<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\registerhomeController;
use App\Http\Controllers\messageController;
use App\Http\Livewire\Crud;
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
// Route::get('students', Crud::class);
//
Route::get("/", [HomeController::class,"index"]);
// Route::get("/users", [AdminController::class,"user"]);
// Route::get("/registerhomeadmin", [AdminController::class,"registerhome"]);

// Route::get("/redirects", [HomeController::class,"redirects"]);

Route::view("/registerhome",'RegisterHome');
Route::view("/welfarehome",'WelfareHome');
Route::get('/registerhome',function() {
  return view('registerhome');
  });

  // Auth::routes();
  // Route::get('/donor', 'PlayerController@index')->name('donor')->middleware('donor');
  // Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
  // Route::get('/welfarehome', 'ScoutController@index')->name('welfarehome')->middleware('welfarehome');

  Route::get('registerhome', [registerhomeController::class, 'registerhome']);
Route::post('store-form', [registerhomeController::class, 'store']);


use App\Http\Controllers\ContactController;





Route::get('home', [messagesController::class, 'home']);
Route::post('store-form1', [messagesController::class, 'store1']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
