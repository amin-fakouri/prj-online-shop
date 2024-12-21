<?php

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

Route::view('/', 'welcome');

// Route Dashboard
Route::get('/my_dashboard/{user_id}', \App\Livewire\MyDashboard::class)->middleware('signed')->name('my_dashboard');

// Route Admin_Dashboard
Route::get('/admin_dashboard/{id}', \App\Livewire\Admin\AdminDashboard::class)->middleware('signed')->name('admin_dashboard');

// Route For Create And Update And Delete Category
Route::get('/create_category', \App\Livewire\Admin\Category\CreateCategory::class)->middleware('signed')->name('create_cat');
Route::get('/edite_category/{cat_id}', \App\Livewire\Admin\Category\EditeNameCategory::class)->middleware('signed')->name('edite_cat');

// Route For Create And Update And Delete SubCategory
Route::get('/create_sub_cat', \App\Livewire\Admin\SubCat\CreateSubCategories::class)->middleware('signed')->name('create_sub_cat');
Route::get('/edite_sub_cat{sub_id}', \App\Livewire\Admin\SubCat\EditeSubCategories::class)->middleware('signed')->name('edite_sub_cat');

// Route For Match Category And SubCategory
Route::get('/match_sub_cat', \App\Livewire\Admin\MatchSubCat::class)->name('match_sub_cat');

// Route For Create And Update And Delete Feature
Route::get('/create_feature', \App\Livewire\Admin\Feature\CreateFeature::class)->middleware('signed')->name('create_feature');
Route::get('/edite_feature/{fe_id}', \App\Livewire\Admin\Feature\EditeFeature::class)->middleware('signed')->name('edite_fe');

// Route For Match Feature And SubCategory
Route::get('/match_fe_sub', \App\Livewire\Admin\MatchFeSub::class)->name('match_fe_sub');

// Route For Create And Update And Delete And Watching Detail Product
Route::get('/create_product', \App\Livewire\Admin\Products\CreateProduct::class)->middleware('signed')->name('create_pro');
Route::get('/detail_product{pro_id}', \App\Livewire\Admin\Products\DetailProducts::class)->middleware('signed')->name('detail_pro');

Route::get('/write_about', \App\Livewire\Admin\WriteAbouteSite::class)->middleware('signed')->name('write_about_site');

// ***************** // ***************** // ***************** // ***************** //
// Route For Products
Route::get('/products/{id}', \App\Livewire\Users\UserProduct::class)->middleware('signed')->name('user_product');

// Route For See Products
Route::get('/see_products/{id}', \App\Livewire\Users\SeeProduct::class)->middleware('signed')->name('see_products');

// Route For Buy Product
Route::get('/buy_product/{id}', \App\Livewire\Users\BuyProduct::class)->middleware('signed')->name('buy_product');

// Route For Get Pdf Form Product
Route::get('/form_buy/{id}', \App\Livewire\Users\FormBuyProduct::class)->middleware('signed')->name('form_buy');

// Route For See Products Form SubCategories
Route::get('/sub_products/{id}', \App\Livewire\Users\SubProducts::class)->middleware('signed')->name('sub_product');

// ***************** // ***************** // ***************** // ***************** //
// Route For User Profile
Route::get('/your_profile/{id}', \App\Livewire\Users\UserProfile::class)->middleware('signed')->name('user_profile');

// Route For Buy Product From Book Mark
Route::get('/buy_product_from_book_mark/{id},{i}', \App\Livewire\Users\BuyProductBookMark::class)->middleware('signed')->name('buy_product_from_book_mark');








//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
