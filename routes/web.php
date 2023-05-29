<?php

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

//Front-end

//Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');
Route::middleware('setlang')->group(function (){
    Route::get('/', 'App\Http\Controllers\AdminController@mainpg')->name('home');
    Route::get('/esasyhabarlar', 'App\Http\Controllers\AdminController@mainnews')->name('mainnews');
    Route::get('/täzelikler/{name}', 'App\Http\Controllers\AdminController@news')->name('news');
    Route::get('/täzelikler/{id2}/show', 'App\Http\Controllers\AdminController@onepg')->name('onepg');
//Route::get('/täzelikler', 'App\Http\Controllers\MainController@news')->name('news');
    Route::get('/habarlaşmak', 'App\Http\Controllers\MainController@contact')->name('contact');
    Route::get('/beýlekiler/{name1}', 'App\Http\Controllers\AdminController@other')->name('other');
    Route::get('/biz-barada', 'App\Http\Controllers\MainController@about')->name('about');

    Route::get('search', 'App\Http\Controllers\AdminController@search');
    Route::post('/contact/submit', 'App\Http\Controllers\AdminController@contactsub')->name('contact-form');
});

//Lang

Route::get('locale/{locale}', 'App\Http\Controllers\MainController@changelang')->name('locale');

//Back-end

//Route::get('/admin', 'App\Http\Controllers\MainController@admin')->middleware(['auth']);
Route::get('/admin/post', 'App\Http\Controllers\AdminController@addcats')->middleware(['auth'])->name('admin-post');
Route::get('/admin/others', 'App\Http\Controllers\AdminController@others')->middleware(['auth'])->name('admin-others');
Route::get('/admin/addcat', 'App\Http\Controllers\AdminController@allDBcats')->middleware(['auth'])->name('admin-cat');
Route::get('/admin/contact', 'App\Http\Controllers\AdminController@allDB')->middleware(['auth'])->name('contact-data');

Route::get('/admin/news/{id}/update', 'App\Http\Controllers\AdminController@updatenews')->middleware(['auth'])->name('update-news');
Route::get('/admin/cat/{id}/update', 'App\Http\Controllers\AdminController@updatecat')->middleware(['auth'])->name('update-cat');

Route::get('/admin/news/{id}/delete', 'App\Http\Controllers\AdminController@deletenew')->middleware(['auth'])->name('delete-news');
Route::get('/admin/others/{cat}/{id}/delete', 'App\Http\Controllers\AdminController@deleteother')->middleware(['auth'])->name('delete-other');
Route::get('/admin/cat/{id}/delete', 'App\Http\Controllers\AdminController@deletecat')->middleware(['auth'])->name('delete-cat');
Route::get('/admin/contact/{id}/delete', 'App\Http\Controllers\AdminController@deletecont')->middleware(['auth'])->name('deletecont');

Route::post('/admin/post/submit', 'App\Http\Controllers\AdminController@tasykla')->middleware(['auth'])->name('admin-post-submit');
Route::post('/admin/other/submit', 'App\Http\Controllers\AdminController@otherssubmit')->middleware(['auth'])->name('admin-other-submit');
Route::post('/admin/addcat/submit', 'App\Http\Controllers\AdminController@catsubmit')->middleware(['auth'])->name('cat-submit');

Route::post('/admin/{id}/update', 'App\Http\Controllers\AdminController@updatesubmit')->middleware(['auth'])->name('update-submit');
Route::post('/admin/cat/{id}/update', 'App\Http\Controllers\AdminController@updatecatsubmit')->middleware(['auth'])->name('update-cat-submit');



Route::get('/admin', 'App\Http\Controllers\AdminController@allDBnews')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
