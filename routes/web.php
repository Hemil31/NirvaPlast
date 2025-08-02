<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home-page');

Route::get('/about', function () {
    return view('about');
})->name('about-page');

Route::get('/service', function () {
    return view('service');
})->name('service-page');

Route::get('/project', function () {
    return view('project');
})->name('project-page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact-page');

Route::get('/blog', function () {
    return view('blog');
})->name('blog-page');

Route::get('/terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition-page');

Route::prefix('admin')->group(function () {

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', function () {
            return view('admin.login');
        })->name('login');
        Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin-logout-page');
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('admin-dashboard-page');

        Route::prefix('blog')->group(function () {
            Route::resource('/', BlogController::class)->parameters(['' => 'blog'])->names([
                'index' => 'admin-blog-page',
                'create' => 'admin-blog-create-page',
                'store' => 'admin.blog.store',
                'edit' => 'admin-blog-edit-page',
                'update' => 'admin.blog.update',
                'destroy' => 'admin.blog.delete',
                'show' => 'admin.blog.show',
            ]);
        });
    });
});

Route::fallback(function () {
    return view('404');
})->name('not-found-page');
