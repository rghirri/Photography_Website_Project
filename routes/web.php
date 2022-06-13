<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PhotoAdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUsFormController;


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

Route::get('/', [ HomePageController::class, 'index' ])->name('homepage.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function (){
    
    // Categories
    Route::resource('categories', CategoriesController::class);

    // Tags
    Route::resource('tags', TagsController::class);

    // Posts
    Route::resource('posts', PostsController::class);

    Route::get('trashed-posts', [PostsController::class, 'trashed'])->name('trashed-posts.index');

    Route::put('restore-post/{post}', [PostsController::class, 'restore'])->name('restore-posts');

});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('users/profile', [ UsersController::class, 'edit' ])->name('users.edit-profile');

    Route::put('users/profile', [ UsersController::class, 'update' ])->name('users.update-profile');

    Route::get('users', [ UsersController::class, 'index' ])->name('users.index');

    Route::post('users/{user}/make-admin', [ UsersController::class, 'makeAdmin' ])->name('users.make-admin');

});

// Posts
    Route::resource('blog', BlogController::class);

    Route::get('blog', [ BlogController::class, 'index' ])->name('blog');

    Route::get('blog/categories/{category}', [ BlogController::class, 'category' ])->name('blog.category');

    Route::get('blog/tags/{tag}', [ BlogController::class, 'tag' ])->name('blog.tag');

    Route::resource('slider', SliderController::class);

    Route::get('trashed-slider', [ SliderController::class, 'trashed' ] )->name('trashed-sliders.index');

    Route::put('restore-slider/{slider}', [ SliderController::class, 'restore' ] )->name('restore-slider');
   

    //Route::resource('homepage', HomePageController::class);

    Route::resource('services', ServicesController::class);

    Route::resource('speciality', SpecialityController::class);

    Route::resource('photogallery', PhotoController::class);

    Route::resource('photoadmingallery', PhotoAdminController::class);

    Route::resource('about', AboutController::class);

    Route::resource('aboutadmin', AboutAdminController::class);

    Route::resource('contact', ContactController::class);

    Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact.index');
    
    Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');