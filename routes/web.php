<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home');
});

//route blog
Route::get('/blog',[BlogController::class,'home']);
Route::get('/blog/tentang',[BlogController::class,'tentang']);

Route::get('/blog/pesan',[BlogController::class,'pesan']);

Route::get('/blog/kontak',[BlogController::class,'kontak'])->name('Kontak');
Route::post('/blog/sbmtkntk',[BlogController::class,'sbmtkntk'])->name('Kontak.kirim');
Route::get('/kontak/kirim/pesan', [BlogController::class, 'showMessage'])->name('Kontak.pesan');

Route::get('/admin/reports', [HalamanController::class, 'reports'])->name('admin.reports');
Route::get('/admin/reports/message/{id}/edit', [HalamanController::class, 'edit'])->name('admin.reports.edit');
Route::put('/admin/reports/message/{id}', [HalamanController::class, 'update'])->name('admin.reports.update');
Route::delete('/admin/reports/message/{id}', [HalamanController::class, 'delete'])->name('admin.reports.delete');


// Route::post('/blog/kontak/submit',[BlogController::class,'store']);


// Route::resource('posts', PostController::class);

// // returns the home page with all posts
// Route::get('/', PostController::class .'@index')->name('posts.index');
// // returns the form for adding a post
// Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// // adds a post to the database
// Route::post('/posts', PostController::class .'@store')->name('posts.store');
// // returns a page that shows a full post
// Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// // returns the form for editing a post
// Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// // updates a post
// Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// // deletes a post
// Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');
