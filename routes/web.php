<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\InquireController;
use App\Http\Controllers\Admin\LoginController;
use App\Models\Product;
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

Route::get('/product', function () {
    return view('product');
})->name('product-page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact-page');

Route::get('/product', function () {
    $products = Product::where('status', '1')->get();
    return view('product', compact('products'));
})->name('product-page');

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

        Route::prefix(prefix: 'product')->group(function () {
            Route::resource('/', ProductController::class)->parameters(['' => 'product'])->names([
                'index' => 'admin-product-page',
                'create' => 'admin-product-create-page',
                'store' => 'admin.product.store',
                'edit' => 'admin.product-edit-page',
                'update' => 'admin.product.update',
                'destroy' => 'admin.product.delete',
                'show' => 'admin.product.show',
            ]);
        });

        Route::prefix('inquire')->group(function () {
            Route::resource('/', InquireController::class)->parameters(['' => 'inquire'])->names([
                'index' => 'admin-inquire-page',
                'create' => 'admin-inquire-create-page',
                'edit' => 'admin-inquire-edit-page',
                'update' => 'admin.inquire.update',
                'destroy' => 'admin.inquire.delete',
                'show' => 'admin.inquire.show',
            ]);
        });

    });
});

Route::post('/inquire/store', [InquireController::class, 'store'])->name('admin.inquire.store');

Route::fallback(function () {
    return view('404');
})->name('not-found-page');

// Route::get('/php-info', function () {
//     ini_set('upload_max_filesize', '20M');
//     ini_set('post_max_size', '25M');
//     phpinfo();
// });

// Route::get('/download-logos', function () {
//     $logos = [
//         'https://chemical.market/public/images/AboutUsPage/keySuppliers/logo1.png',
//         'https://chemical.market/public/images/AboutUsPage/keySuppliers/logo2.png',
//         'https://chemical.market/public/images/AboutUsPage/keySuppliers/logo3.png',
//         'https://chemical.market/public/images/AboutUsPage/keySuppliers/logo4.png',
//         'https://chemical.market/public/images/AboutUsPage/keySuppliers/logo5.png',
//         'https://chemical.market/public/images/AboutUsPage/keySuppliers/logo6.png',
//     ];

//     $zipFileName = 'key-suppliers-logos.zip';
//     $zip = new ZipArchive;

//     $tmpFile = tempnam(sys_get_temp_dir(), $zipFileName);

//     if ($zip->open($tmpFile, ZipArchive::CREATE) === TRUE) {
//         foreach ($logos as $index => $logoUrl) {
//             $logoContent = file_get_contents($logoUrl);
//             $extension = pathinfo($logoUrl, PATHINFO_EXTENSION);
//             $zip->addFromString("logo" . ($index + 1) . "." . $extension, $logoContent);
//         }
//         $zip->close();
//     }

//     return response()->download($tmpFile, $zipFileName)->deleteFileAfterSend(true);
// });
