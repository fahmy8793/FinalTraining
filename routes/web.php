<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\coursesController;
use App\Http\Controllers\userController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\HomeController;
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

Route::view('admin','admin');
Route::view('admin2','admin2');
Route::view('admin3','admin3');
Route::view('home','dashboard.home.index');
Route::view('admin','admin');

Route::resource('category', CategoryController::class);

Route::resource('feedback', feedbackController::class);
//Route::resource('/users', userController::class);

Route::resource('users', userController::class);
//    ->parameters([
//        'users' => 'user'
//    ]);
Route::resource('register', RegisterController::class);


//Route::get('login', 'userController@index');
//Route::post('post-login', 'userController@postLogin');
//Route::get('registration', 'userController@registration');
//Route::post('post-registration', 'userController@postRegistration');
//Route::get('dashboard', 'userController@dashboard');
//Route::get('logout', 'userController@logout');
//Route::get('/login', userController::class, 'index');
//Route::post('/post-login', userController::class, 'postLogin');
//Route::get('/registration', userController::class, 'registration');
//Route::post('/post-registration', userController::class, 'postRegistration');
//Route::get('/dashboard', userController::class, 'dashboard');
//Route::get('/logout', userController::class, 'logout');

Route::resource('courses', coursesController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'store'])->name('home2');

Route::get('course/{id}', [coursesController::class, 'see'])->name('course.info');
Route::get('mycourses', [coursesController::class, 'mycourses'])->name('mycourses');
Route::get('search', [coursesController::class, 'search'])->name('search');
Route::get('ma', [coursesController::class, 'ma'])->name('ma');
Route::get('order/{id}', [coursesController::class, 'order'])->name('order');


Route::get('logout', [LoginController::class, 'logout'])->name('logout');





//Route::post('logout', 'LoginController@logout')->name('logout');


//Route::group(['middleware' => ['auth']], function() {
//    /**
//     * Logout Routes
//     */
//    Route::post('/logout', 'LoginController@logout')->name('logout');
//});





// Routes for regular users
//Route::group(['middleware' => 'auth'], function () {
////Route::post('/logout', 'LoginController@logout')->name('logout'); // Handle logout
//Route::post('/logout', [LoginController::class,  'logout'])->name('logout');
//
//});

// Routes for admin users
//Route::group(['middleware' => ['web', 'guest']], function () {
//    Route::get('admin/login', 'LoginController@showLoginForm')->name('admin.login'); // Show admin login form
//    Route::post('admin/login', 'LoginController@login')->name('admin.login.post'); // Handle admin login
//    Route::post('admin/logout', 'LoginController@logout')->name('admin.logout'); // Handle admin logout
//});
//Route::get('search', [coursesController::class, 'search'])->name('search');

Route::get('/login', [LoginController::class,   'showLoginForm'])->name('login'); // Show login form
Route::post('/login', [LoginController::class,   'login']); // Show login form

Route::get('/LoginForm', [LoginController::class,   'LoginForm'])->name('LoginForm'); // Show login form
Route::post('/LoginForm', [LoginController::class,   'loginat']); // Show login form
Route::get('/register', [RegisterController::class,   'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class,   'register']);
