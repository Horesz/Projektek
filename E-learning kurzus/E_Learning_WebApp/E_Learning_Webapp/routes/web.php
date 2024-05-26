<?php

use App\Http\Controllers\KurzusController;
use App\Http\Controllers\HallgatokController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/createKurzus', function () {
    return view('kurzusok.createKurzus');
});


//Kurzus létrehozása és tárolása
Route::get('/kurzusok',[KurzusController::class,'index'])->name('Kurzusok.kurzusok');
Route::get('/kurzusok/createKurzus',[KurzusController::class,'create'])->name('Kurzusok.create');
Route::post('/kurzusok/createKurzus',[KurzusController::class,'store'])->name('Kurzusok.store');
//Kurzus módosítás és törlése
Route::get('/kurzusok/{kurzus}/edit',[KurzusController::class,'edit'])->name('Kurzusok.edit');
Route::put('/kurzusok/{kurzus}/update',[KurzusController::class,'update'])->name('Kurzusok.update');
Route::delete('/kurzusok/{kurzus}/delete',[KurzusController::class,'delete'])->name('Kurzusok.delete');
//hallgatok kezelése
Route::get('/hallgatok/addHallgato',[HallgatokController::class,'addHallgatoShow'])->name('Hallgatok.addHallgato');
Route::get('/hallgatok/orderHallgato',[HallgatokController::class,'orderHallgatoShow'])->name('Hallgatok.orderHallgato');
Route::get('/hallgatok/removeHallgato',[HallgatokController::class,'removeHallgatoShow'])->name('Hallgatok.removeHallgato');

//kurzus megjelenitése gombra kattintás után 
Route::get('/kurzusok/{id}/show',[KurzusController::class,'KurzusShow'])->name('Kurzusok.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
