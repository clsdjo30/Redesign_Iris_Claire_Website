<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticPageController;
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
Route::controller(StaticPageController::class)->group(function () {
    Route::get('/', 'welcome')->name('welcome');
    Route::get('/team', 'team')->name('team');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/mentions-legales', 'legal')->name('mentions-legales');
    Route::get('/privacy-policy', 'policy')->name('privacy-policy');
    Route::get('/conditions-generales-de-ventes', 'condition')->name('conditions-generales-de-ventes');

});



/* Blog Section */

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [PostController::class, 'like'])->name('blog.like');
Route::post('/blog/{post}/unlike', [PostController::class, 'unlike'])->name('blog.unlike');


/* Dashboard Section */
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin');


Route::middleware(['auth'])->group(function () {
    /* route des posts */
    Route::get('/admin/posts', [AdminController::class, 'index'])->name('admin.post.index');
    Route::get('/admin/posts/create', [AdminController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/posts', [AdminController::class, 'store'])->name('admin.post.store');
    Route::get('/admin/posts/{post}/edit', [AdminController::class, 'edit'])->name('admin.post.edit');
    Route::put('/admin/posts/{post}', [AdminController::class, 'update'])->name('admin.post.update');
    Route::delete('/admin/posts/{post}', [AdminController::class, 'destroy'])->name('admin.post.destroy');
    /* Route des Category*/
    Route::get('/admin/categories', [AdminCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/admin/categories/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/categories', [AdminCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/categories/{category}/edit', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/categories/{category}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin/categories/{category}', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');
});


require __DIR__.'/auth.php';
