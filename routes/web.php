<?php


use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;
use App\HTTP\Controllers\RegisterController;
use App\HTTP\Controllers\ProfilesController;
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

/*Route::get('/', function(){
    return view('welcome');
});
*/





Auth::routes();

Route::get('/email', function(){
    return new NewUserWelcomeMail();
});




Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])
->name('register')
->middleware('HasInvitation');

/*Route::get('/home', function(){
    return redirect()->route::get('/', [App\Http\Controllers\PostsController::class, 'index']);
});*/

Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');;

Route::post('follow/{user}', [App\Http\Controllers\FollowsController::class, 'store']);

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('posts.show'); //'PostsController@create');

Route::delete('p/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('posts.destroy');

Route::get('p/restore/{id}', [App\Http\Controllers\PostsController::class, 'restore'])->name('posts.restore');

Route::get('p/restore-all', [App\Http\Controllers\PostsController::class, 'restoreAll'])->name('posts.restoreAll');

 

Route::get('users', [App\HTTP\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


Route::get('register/request', [App\Http\Controllers\Auth\RegisterController::class, 'requestInvitation'])->name('requestInvitation');
//Route::get('register/request', 'Auth\RegisterController@requestInvitation')->name('requestInvitation');

Route::post('invitations', [App\Http\Controllers\InvitationsController::class, 'store'])->middleware('guest')->name('storeInvitation');

Route::get('invitations', [App\Http\Controllers\InvitationsController::class, 'index'])->middleware('admin')->name('showInvitations');

