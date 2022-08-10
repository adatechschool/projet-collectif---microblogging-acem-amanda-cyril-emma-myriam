<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::resource('posts', PostController::class);

Route::resource('user', UserController::class);

/*
Route::get('/posts/create', function () {
    return view('posts.create');
})->middleware(['auth'])->name('create');
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('testimage/{filename}', function ($filename)
{

    $path = asset('storage/'.$filename) ;
    echo ($path);

});

Route::get('tstorage/{filename}', function ($filename)
{  // /var/www/html/storage
    // $path = storage_path().'/'. $filename;
    $path = asset('storage/'.$filename) ;
    echo ($path);

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
