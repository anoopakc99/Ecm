<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDasboardComponent;
use App\Http\Livewire\User\UserDasboardComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;




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
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::get('/checkout',CheckoutComponent::class);

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');



Route::middleware(['auth:sanctum', 'varified'])->group(function(){
    Route::get('/user/dasboard',UserDasboardComponent::class,)->name('user.dasboard');
});

Route::middleware(['auth:sanctum', 'varified','authadmin'])->group(function(){
    
   
});
Route::get('admin-view', 'HomeController@adminView')->name('admin.view');


Route::get('/admin/dasboard',AdminDasboardComponent::class)->name('admin.dasboard');
Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');

Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
Route::get('/admin/product/edit{product_slug}',AdminEditProductComponent::class)->name('admin.editproduct');

Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.homeslider');
Route::get('/admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
Route::get('/admin/slider/edit{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

Route::get('/admin/home-categories',AdminHomeCategoryComponent::class)->name('admin.homecategories');

Route::get('/admin/sale',AdminSaleComponent::class)->name('admin.sale');


