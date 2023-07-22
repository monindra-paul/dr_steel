<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\PlantsController;
use App\Http\Controllers\Frontend\EquipmentsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\CSRController;
use App\Http\Controllers\Frontend\CertificationsController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\QualityController;


use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ContactApplicationController;



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

// Route::get('/', function () {
//     return view('welcome');
// });



//home
Route::get('/',[HomePageController::class,'index']);

//about
Route::get('/about-us',[AboutController::class,'index']);


//contact
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'postcontact']);

//gallery
Route::get('/gallery',[GalleryController::class,'index']);

//CSR
Route::get('/csr',[CSRController::class,'index']);


//product
Route::get('/product',[ProductController::class,'index']);


//Facilities
Route::get('/our-plants',[PlantsController::class,'index']);
Route::get('/equipments',[EquipmentsController::class,'index']);
Route::get('/quality',[QualityController::class,'index']);



//certification
Route::get('/certifications',[CertificationsController::class,'index']);






Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contactapplication',[ContactApplicationController::class,'index'])->middleware(['auth', 'verified'])->name('contactapplication');
Route::get('/contactapplication/{id}',[ContactApplicationController::class,'show'])->middleware(['auth', 'verified'])->name('contactapplication');










// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
