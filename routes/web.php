<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

route::get('/',[HomeController::class,'homepage']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard'); 

route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

// route::get('post',[HomeController::class,'post'])->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/adoption_post',[AdminController::class,'adoption_post']);
Route::post('/add_post',[AdminController::class,'add_post']);
Route::get('/adoption_details',[AdminController::class,'adoption_details'])->name('adoption');
Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);
Route::get('/edit_post/{id}',[AdminController::class,'edit_post']);
Route::post('/update_post/{id}',[AdminController::class,'update_post']);




require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('home.about');
});
Route::get('/donation', function () {
    return view('home.donation');
});
Route::get('/adoption', function () {
    return view('home.adoption');
});