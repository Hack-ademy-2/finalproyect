<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

//Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/announcement/create', [HomeController::class,'newAnnouncement'])->name('announcement.new');
Route::get('/', [PublicController::class,'index'])->name('home');
//Rutas para los Anuncios

Route::get('/category/{name}/{id}/announcements', [PublicController::class,'announcementsByCategory'])->name('announcement.category');

//GET

Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');

Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');

Route::get('/announcement/{id}/details', [PublicController::class,'show'])->name('announcement.show');

Route::get('/announcement/{announcement}/edit', [AnnouncementController::class,'edit'])->name('announcement.edit');

Route::post('/announcement/images/upload', [AnnouncementController::class,'uploadImages'])->name('announcement.images.upload');

//MATCH
Route::match(['put','patch'], '/announcement/{announcement}', [AnnouncementController::class, 'update'])->name('announcement.update');

//DELETE
Route::delete('/announcement/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');

//POST
Route::post('/announcement', [AnnouncementController::class,'store'])->name('announcement.store');
Route::post('/locale/{locale}', [PublicController::class,'locale'])->name('locale');

//Revisor
Route::get('/revisor',[RevisorController::class,'index'] )->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept', [RevisorController::class, 'accept'])->name('revisor.announcement.accept');
Route::post('/revisor/announcement/{id}/reject',[RevisorController::class, 'reject'])->name('revisor.announcement.reject');