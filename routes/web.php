<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\ProfileController;
use App\Models\Customer;
use App\Exports\OrderExport;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LandingPageController;
use Maatwebsite\Excel\Facades\Excel;
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
  
// Route::get('/', function () {
//     return view('Landing_page.index');
// });
Route::get('/', [LandingPageController::class, 'index'])->name('lp');
Route::get('/tour', [LandingPageController::class, 'tour'])->name('tour');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/blog', [LandingPageController::class, 'blog'])->name('blog');
Route::get('/blog/{blog}', [LandingPageController::class, 'showblog'])->name('showblog');
Route::get('/Category/{category}', [LandingPageController::class, 'showByCategory'])->name('kategori');
Route::get('/tags/{tag}', [LandingPageController::class, 'filterByTag'])->name('tags');
Route::get('/search', [LandingPageController::class, 'search'])->name('search');
Route::get('/search/ajax', [LandingPageController::class, 'liveSearch'])->name('search.ajax');



Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::middleware(['role:customer', 'verified','auth'])->group(function () {
     Route::prefix('customer')->group(function(){
        Route::name('customer.')->group(function(){
        Route::get('/', [CustomerController::class, 'index'])->name('index');
        Route::get('/wisata/{wisata}', [CustomerController::class, 'tampilkan'])->name('show');
        Route::get('/explore', [CustomerController::class, 'explore'])->name('explore');
        Route::get('/order', [CustomerController::class, 'summary'])->name('summary');
        Route::get('/kategori/{kategori}', [CustomerController::class, 'filterByCategory'])->name('wisata.filter');
        Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
        // Route::get('/detail', [CustomerController::class, 'riwayat'])->name('riwayat');
        Route::get('/invoice/{id}', [OrderController::class, 'invoice'])->name('riwayat');
        Route::get('/history', [OrderController::class, 'history'])->name('riwayat');
        Route::get('/ulasan/{wisataId}/{orderId}', [UlasanController::class, 'create'])->name('ulasan');
        Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasanstore');
        Route::get('/profil', [CustomerController::class, 'profil'])->name('profile');
        Route::get('/search', [CustomerController::class, 'search'])->name('search');
        Route::put('/updatePassword', [CustomerController::class, 'updatePassword'])->name('password.update');
        Route::put('/update/{id}', [CustomerController::class, 'updateprofil'])->name('updateprofil');

        Route::post('/image-profile', [ProfileController::class, 'editImage'])->name('upload-image');
        Route::delete('/image-remove', [ProfileController::class, 'removeImage '])->name('remove-image');
        
        
            });
        });
    });


// SUPERADMIN
Route::group(['middleware' => ['role:superadmin']], function() {
    Route::prefix('superadmin')->group(function() {
        Route::name('superadmin.')->group(function() {
            Route::resource('roles', RoleController::class);
            Route::resource('users', UserController::class);
            // Route::get('/report', [UserController::class, 'report'])->name('report');
            Route::get('/filterOrders', [UserController::class, 'filterOrders'])->name('report');
            Route::get('/export-orders', [UserController::class, 'exportCsv'])->name('export');
            
        });
    });
});

// VENDOR
Route::group(['middleware' => ['role:vendor']], function(){
    Route::prefix('vendor')->group(function(){
        Route::name('vendor.')->group(function(){
            Route::get('/home', [VendorController::class, 'index'])->name('index');
            Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
            Route::get('/produk', [VendorController::class, 'wisata'])->name('produk');
            Route::get('/add', [WisataController::class, 'create'])->name('create');
            Route::post('/store', [WisataController::class, 'store'])->name('store');
            Route::get('/profil', [VendorController::class, 'profil'])->name('profil');
            Route::get('/produk', [VendorController::class, 'produk'])->name('produk');
            Route::get('/pesanan', [VendorController::class, 'pesanan'])->name('pesanan');
            Route::get('/wisata/{wisata}', [WisataController::class, 'tampilkan'])->name('show');

            // Route untuk edit dan hapus
            Route::get('/vendor/{id}/edit', [WisataController::class, 'edit'])->name('edit');
            Route::put('/vendor/{id}', [WisataController::class, 'update'])->name('update');
            Route::delete('/vendor/{id}', [WisataController::class, 'destroy'])->name('destroy');

            Route::get('/filterOrders', [VendorController::class, 'filterOrders'])->name('report');

            // Route untuk post artikel
            Route::get('/artikel', [BlogController::class, 'index'])->name('artikel');
            Route::get('/TambahArtikel', [BlogController::class, 'create'])->name('tambahartikel');
            Route::post('/add', [BlogController::class, 'store'])->name('storeartikel');
        });
    });
});
