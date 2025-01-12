<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatusLikeController;

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

// landing page atau halaman utama
Route::get('/', function () {
    return view('index', [
        'head' => 'Wind App'
    ]);
});
//akhir landing page atau halaman utama



// Login
Route::get('/login',[LoginController::class,'index'])->name('login') ;
Route::post('/login', [LoginController::class , 'authenticate']) ;
// akhir login

//register
Route::post('/register', [RegisterController::class , 'store']) ;
Route::get('/register', [RegisterController::class , 'index']) ;
//akhir register


//logout
Route::post('/logout' , [LoginController::class,'logout']) ;
// akhir logut


// login via gmail
Route::get('/google/redirect', [LoginController::class,'redirect'])->name('google.redirect');
Route::get('/google/callback', [LoginController::class,'callback'])->name('google.callback');
// akhir login via gmail



//home
Route::get('/home', [HalamanUtamaController::class,'index'])->middleware('auth')->name('home');
Route::resource('/statuses', controller: StatusController::class)->middleware('auth');
// akhirhome


// komentar
Route::resource('/statuses/{status}/coment', controller: ComentController::class)->middleware('auth');
// akhir komentar


//profile
Route::put('/profile/{user:username}', [ProfileController::class, 'update'])->middleware('auth');
Route::get('/profile/{user:username}', [ProfileController::class, 'show'])->middleware('auth');
Route::get('/profile/{user:username}/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::resource('/profile', controller: ProfileController::class)->middleware('auth');
// akhir profile



// follow dan unfollow
Route::post('/{user}/follow',[FollowController::class,'follow'])->middleware('auth')->name('users.follow') ;
Route::post('/{user}/unfollow',[FollowController::class,'unfollow'])->middleware('auth')->name('users.unfollow') ;

// akhir follow dan unfollow


// like
Route::post('/status/{status}/like',[StatusLikeController::class,'like'])->middleware('auth')->name('status.like') ;
Route::post('/status/{status}/unlike',[StatusLikeController::class,'unlike'])->middleware('auth')->name('status.unlike') ;
// akhir like



// search
Route::get('/search',[SearchController::class,'index'])->name('search') ;


// following
Route::get('/following',[FollowingController::class,'index'])->name('following') ;
