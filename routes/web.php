<?php

use App\Models\products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvestNowController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\KelolaAdminController;
use App\Http\Controllers\KelolaPeternakController;


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

//Route menuju halaman index
Route::get('/', function () {
    return view('shoppinghome');
});

Route::get('/register', [UsersController::class, 'showRegistrationForm'])->name('registerForm');
Route::post('/register', [UsersController::class, 'register'])->name('registPost');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'authentication']);

Route::get('/home', [PembeliController::class, 'index'])->name('pembeli');
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('is_admin')->name('admin');

Route::get('/logout', [LoginController::class, 'logout']);

//Route Shop 
Route::get('/shop', [ShopController::class, 'index']);

//Route Product
Route::get('/product', [ProductController::class, 'index']);

//Route Invest
Route::get('/invest', [InvestController::class, 'index']);

//Route Invest Now
Route::get('/invest-now', [InvestNowController::class, 'index']);

//Route Kelola peternak
Route::get('/kelolapeternak', [KelolaPeternakController::class, 'index']);

//Route Kelola peternak tambah peternak
Route::post('/kelolapeternak/store', [KelolaPeternakController::class, 'store']);


//Route Detail Kelola peternak
Route::get('/detailpeternak/{id}', [KelolaPeternakController::class, 'detail'])->name('detailpeternak');

//Route edit Kelola peternak
Route::put('/detailpeternak/{id}/update', [KelolaPeternakController::class, 'update']);

//Route hapus Kelola peternak
Route::delete('/kelolapeternak/{id}', [KelolaPeternakController::class, 'destroy']);

//Route Kelola pembeli
Route::get('/kelolapembeli', [KelolaUserController::class, 'index_pembeli']);

//Route Kelola admin
Route::get('/kelolaadmin', [KelolaAdminController::class, 'index']);

//Route hapus Kelola admin
Route::delete('/kelolaadmin/{id}', [KelolaAdminController::class, 'destroy']);

//Route Kelola peternak tambah peternak
Route::post('/kelolaadmin/store', [KelolaAdminController::class, 'store']);

//Route edit Kelola peternak
Route::put('/kelolaadmin/{id}/update', [KelolaAdminController::class, 'update']);

//Route Kelola profile
Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile/update', [ProfileController::class, 'update']);

//Route Registrasi 
Route::get("/regis",function (){
    return view('myregister');
});

//Route Login baru
Route::get("/myaccountlogin",function (){
    return view('mylogin');
});

//Route Login baru
Route::get("/uprof",function (){
    return view('profile-user');
});

//Route profile pengguna
Route::get("/myprouser",function (){
    return view('myprofileuser');
});



Route::get("/kelolainvest",function (){
    return view('mykelolainvestasi');
});

// Route::get("/kelolaadmin",function (){
//     return view('mykelolaadmin');
// });

Route::get("/detailkelolainvestasi",function (){
    return view('mydetailkelolainvestasi');
});
