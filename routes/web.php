<?php

use App\Http\Controllers\GithubDeploymentController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', static function () {
    return view('home');
});

Route::get('/about', static function () {
    return view('about');
});

Route::get('/services', static function () {
    return view('services');
});

Route::get('/clients', static function () {
    return view('clients');
});

Route::get('/reservation', static function () {
    return view('reservation');
});

Route::get('/blog/post1', static function () {
    return view('blog-post1');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Github Deployment
Route::post('/github/deploy', [GithubDeploymentController::class, 'deploy']);


