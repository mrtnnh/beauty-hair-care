<?php

use Illuminate\Support\Facades\Route;
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
//     return view('home');
// });
Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showloginForm'])->name('login');
Route::get('/', [App\Http\Controllers\ProductController::class, 'get_newproducts_table'])->name('home');

Route::prefix('/home')->group(function ()
{
  Route::get('/', [App\Http\Controllers\ProductController::class, 'get_newproducts_table'])->name('home');
  Route::get('/search', [App\Http\Controllers\SearchController::class, 'showsearch'])->name('search');
  Route::post('/search/search_result', [App\Http\Controllers\SearchController::class, 'search'])->name('search.result');
  Route::get('search/search_result/product/{id}', [App\Http\Controllers\ProductController::class, 'showproduct']);
  Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
  Route::get('/inquiry', [App\Http\Controllers\InquiryController::class, 'showminquiry'])->name('inquiry');
  Route::post('/inquiry', [App\Http\Controllers\InquiryController::class, 'validator'])->name('inquiry.store');
  Route::get('/newitem', [App\Http\Controllers\ProductController::class, 'show_newitem'])->name('newitem');
  Route::get('/newitem/product/{id}', [App\Http\Controllers\ProductController::class, 'showproduct']);
  Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'showproduct'])->name('product');
  Route::post('/product/{id}', [App\Http\Controllers\CartController::class, 'add_cart'])->name('add_cart');

});

Route::prefix('/home/mypage')->group(function ()
{
  Route::get('/', [App\Http\Controllers\HomeController::class, 'showmypage'])->name('mypage');
  Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('mypage.store');
  Route::get('/inquiry', [App\Http\Controllers\InquiryController::class, 'showminquiry'])->name('inquiry');
  Route::get('/myinfo', [App\Http\Controllers\UserController::class, 'show_myinfo'])->name('myinfo');
  Route::post('/myinfo', [App\Http\Controllers\UserController::class, 'validator'])->name('myinfo.store');

});

Route::prefix('/admin')->group(function ()
{
  Route::get('/login', [App\Http\Controllers\admin\LoginController::class, 'showlogin'])->name('admin.login');
  Route::post('/login', [App\Http\Controllers\admin\LoginController::class, 'login']);
  Route::get('/register', [App\Http\Controllers\admin\RegisterController::class, 'showRegistrationForm'])->name('admin.register');
  Route::post('/register', [App\Http\Controllers\admin\RegisterController::class, 'register']);
  Route::post('/logout',[App\Http\Controllers\admin\LoginController::class, 'logout'])->name('admin.logout');

});

Route::prefix('/admin/home')->group(function ()
{
  Route::get('/', [App\Http\Controllers\admin\ProductController::class, 'get_newproducts_table'])->name('admin.home');
  Route::get('/product/{id}', [App\Http\Controllers\admin\ProductController::class, 'showproduct'])->name('admin.product');
  Route::get('/newitem', [App\Http\Controllers\admin\ProductController::class, 'show_newitem'])->name('admin.newitem');
  Route::get('/newitem/product/{id}', [App\Http\Controllers\admin\ProductController::class, 'showproduct']);
  Route::get('/search', [App\Http\Controllers\admin\SearchController::class, 'showsearch'])->name('admin.search');
  Route::post('/search/search_result', [App\Http\Controllers\admin\SearchController::class, 'search'])->name('admin.search.result');
  Route::get('/search/search_result/product/{id}', [App\Http\Controllers\admin\ProductController::class, 'showproduct']);
  Route::get('/mypage', [App\Http\Controllers\admin\HomeController::class, 'showmypage'])->name('admin.mypage');

});

Route::prefix('/admin/home/mypage')->group(function ()
{
  Route::get('/', [App\Http\Controllers\admin\MypageController::class, 'showmypage'])->name('admin.mypage');
  Route::get('/users_table', [App\Http\Controllers\admin\UserController::class, 'getusers_table'])->name('users_table');
  Route::get('/products_table', [App\Http\Controllers\admin\ProductController::class, 'show_products_table'])->name('products_table');
  Route::get('/products_table/product_edit/{id}', [App\Http\Controllers\admin\ProductController::class, 'show_product_edit'])->name('product_edit');
  Route::post('/products_table/product_edit/{id}', [App\Http\Controllers\admin\ProductController::class, 'product_edit'])->name('product_edit.store');
  Route::get('/products_table/product_delete/{id}', [App\Http\Controllers\admin\ProductController::class, 'show_product_delete'])->name('product_delete');
  Route::get('/products_register', [App\Http\Controllers\admin\ProductController::class, 'show_product_register'])->name('product_register');
  Route::post('/products_register', [App\Http\Controllers\admin\ProductController::class, 'product_register'])->name('product_register.store');

});
