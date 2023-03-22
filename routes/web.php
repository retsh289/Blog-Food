<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Api\ApiController;


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
// Home Controller
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/',  [HomeController::class, 'index'])->name('index');
Route::get('/detail/{id}',  [HomeController::class, 'detail'])->where('id', '[0-9]+');
Route::get('/tag/{id}',  [HomeController::class, 'tag'])->where('id', '[0-9]+');
Route::get('/category/{id}',  [HomeController::class, 'category'])->where('id', '[0-9]+');
Route::get('/recipes',  [HomeController::class, 'recipes']);
Route::post('/search', [HomeController::class, 'search']);
// Comment Controller
Route::post('/comment/{id}',  [CommentController::class, 'comment'])->middleware('login')->where('id', '[0-9]+');
Route::get('/admin/comment',  [CommentController::class, 'index']);
// Subscribe Controller
Route::get('/subscribe',  [SubscribeController::class, 'getSub'])->middleware('login')->name('subscribe');
Route::post('/subscribe',  [SubscribeController::class, 'postSub']);
Route::get('/admin/subscribe',  [SubscribeController::class, 'index'])->middleware('role');
// Api Controller
Route::post('/api/save',  [ApiController::class, 'saveData']);
Route::get('/api/save/{id}',  [ApiController::class, 'getSaveData'])->where('id', '[0-9]+');
Route::post('/api/love',  [ApiController::class, 'loveData']);
Route::get('/api/love/{id}',  [ApiController::class, 'getLoveData'])->where('id', '[0-9]+');
// Admin Controller
Route::get('admin', [DashboardController::class, 'index']) -> middleware('login')->middleware('role')->name('admin');
// New Controller
Route::get('/admin/news', [NewsController::class, 'index'])-> middleware('login')->middleware('role')->name('admin.news.index');
Route::post('/news', [NewsController::class, 'create']);
// Category Controller
Route::get('/admin/category', [CategoryController::class, 'index'])-> middleware('login')->middleware('role')->name('admin.category.index');
Route::post('/admin/category/create', [CategoryController::class, 'create']);
Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])-> middleware('login')->middleware('role')->name('update')->where('id', '[0-9]+');
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])-> middleware('login')->middleware('role')->name('delete')->where('id', '[0-9]+');
// User Controller
Route::get('/admin/admin', [UserController::class, 'admin'])-> middleware('login')->middleware('role')->name('admin.admin.index');
Route::get('/admin/member', [UserController::class, 'member'])-> middleware('login')->middleware('role')->name('admin.member.index');
Route::post('/admin/user/create', [UserController::class, 'create'])-> middleware('login')->middleware('role');
Route::post('/admin/user/update/{id}', [UserController::class, 'update'])-> middleware('login')->middleware('role')->where('id', '[0-9]+');
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])-> middleware('login')->middleware('role')->name('delete')->where('id', '[0-9]+');
// Tag Controller
Route::get('/admin/tag', [TagController::class, 'index'])-> middleware('login')->middleware('role')->name('admin.tag.index');
Route::post('/admin/tag/create', [TagController::class, 'create'])-> middleware('login')->middleware('role');
Route::post('/admin/tag/update/{id}', [TagController::class, 'update'])-> middleware('login')->middleware('role')->name('update')->where('id', '[0-9]+');
Route::get('/admin/tag/delete/{id}', [TagController::class, 'delete'])-> middleware('login')->middleware('role')->name('delete')->where('id', '[0-9]+');
// Post Controller
Route::get('/admin/post', [PostController::class, 'index'])-> middleware('login')->name('admin.post.index')->middleware('role');
Route::post('/admin/post/create', [PostController::class, 'create'])-> middleware('login')->middleware('role');
Route::post('/admin/post/update/{id}', [PostController::class, 'update'])-> middleware('login')->middleware('role')->name('update')->where('id', '[0-9]+');
Route::get('/admin/cpost/delete/{id}', [PostController::class, 'delete'])-> middleware('login')->middleware('role')->name('delete')->where('id', '[0-9]+');
// Contact Controller
Route::get('/admin/contact', [ContactController::class, 'index'])-> middleware('login')->middleware('role');
Route::post('/contact', [ContactController::class, 'create']);
// Auth Controller
Route::get('login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('register', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('register', [AuthController::class, 'getRegister'])->name('getRegister');
Route::get('forgot-password', [AuthController::class, 'getPassword'])->name('getPassword');
Route::post('password', [AuthController::class, 'password'])->name('password');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('profile/{id}', [AuthController::class, 'profile'])->middleware('login')->name('profile');
