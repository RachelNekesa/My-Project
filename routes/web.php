<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\registerhomeController;
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

Route::get("/", [HomeController::class,"index"]);
Route::get("/users", [AdminController::class,"user"]);

Route::get("/redirects", [HomeController::class,"redirects"]);

Route::view("/registerhome",'RegisterHome');
Route::view("/welfarehome",'WelfareHome');
Route::get('/registerhome',function() {
  return view('registerhome');
  });
  Route::get('registerhome', [registerhomeController::class, 'registerhome']);
Route::post('store-form', [registerhomeController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
