<?php

use Illuminate\Support\Facades\Route;

//referencing controller-importing a path to the controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use APP\Http\Controllers\ContactController;
use App\Http\Controllers\FrequentController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');// to cater for the welcome page
Route::get('/about', [AboutController::class, 'index'])->name('about');//cater for the about us
Route::get('/contact', [ContactController::class, 'index'])->name('contact');//contact form
Route::get('/frequent', [FrequentController::class,'index'])->name('frequent');//cater for FAQS




// Route::get('/about', function () {
//     return view('about');
// });





