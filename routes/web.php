<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/otmetki', function () {
    return view('otmetki');
})->name('otmetki');

Route::get('/sohranenki', function () {
    return view('sohranenki');
})->name('sohranenki');

Route::get('post/add', function () {
    DB::table('post')->insert([
        'id' => '02',
        'title' => 'second',
        'body' => 'its second post'
    ]);
});
Route::get('post', [BlogController::class, 'index']); 
Route::get('blog/create', function () {
    return view('blog.create');
});
Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');