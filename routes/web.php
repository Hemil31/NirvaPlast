<?php

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

Route::get('/adminss', function () {
    return view('admin.layout.main');
})->name('admin-page');

Route::fallback(function () {
    return view('404');
})->name('not-found-page');
