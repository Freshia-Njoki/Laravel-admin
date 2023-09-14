<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::namespace('App\Http\Controllers')->group(function (){
    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/blog', 'PageController@blog')->name('blog');
    Route::get('/blog-details', 'PageController@blogDetails')->name('blog.details');
    Route::get('/', 'PageController@index')->name('index');
    Route::get('/test', 'PageController@test')->name('test');
    Route::get('/listproducts', 'HomeController@list')->name('listproducts');
    Route::post('/product/store', 'HomeController@storeProduct')->name('product.store');
    Route::post('/product/update/{id}', 'HomeController@updateProduct')->name('product.update');
    Route::post('/product/delete/{id}', 'HomeController@deleteProduct')->name('product.delete');
    
//categories route
    Route::get('/categories', 'categoriesController@index')->name('categories');
    Route::post('/categories/delete/{id}', 'categoriesController@deleteCategory')->name('category.delete');
    Route::post('/categories/update/{id}', 'categoriesController@updateCategory')->name('category.update');
    Route::post('/categories/store', 'categoriesController@storeCategory')->name('category.store');

});

//admin routes
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->as('admin')->group(function(){
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/users', 'AdminController@users')->name('users');
    Route::resource('/blog/category', 'BlogCategoryController')->names([
        'index' => 'category.list',
        'create' => 'category.create',
        'store' => 'category.store',
        'show' => 'category.show',
        'edit' => 'category.edit',
        'update' => 'category.update',
        'destroy' => 'category.destroy'

    ]);
});


// require __DIR__.'/auth.php';
