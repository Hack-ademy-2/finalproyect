<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/announcement/new', [HomeController::class,'newAnnouncement'])->name('announcement.new');



//Rutas para los Anuncios
Route::get('announcement', [AnnouncementController::class, 'index'])->name('announcement.index');

Route::get('announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');

Route::post('announcement', [AnnouncementController::class,'store'])->name('announcement.store');

Route::get('announcement/{announcement}', [AnnouncementController::class,'show'])->name('announcement.show');

Route::get('announcement/{announcement}/edit', [AnnouncementController::class,'edit'])->name('announcement.edit');

Route::match(['put','patch'], 'announcement/{announcement}', [AnnouncementController::class, 'update'])->name('announcement.update');

Route::delete('announcement/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');

