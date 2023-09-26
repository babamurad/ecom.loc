<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\UserComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');

Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
Route::get('/product/{slug}', \App\Http\Livewire\DetailsComponent::class)->name('product.details');
Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('shop.cart');
Route::get('/wishlist', \App\Http\Livewire\WishlistComponent::class)->name('shop.wishlist');
Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class)->name('shop.checkout');
Route::get('/product-category/{slug}', \App\Http\Livewire\CategoryComponent::class)->name('product.category');
Route::get('/search', \App\Http\Livewire\SearchComponent::class)->name('product.search');
Route::get('/contact', \App\Http\Livewire\ContactComponent::class)->name('contact');
Route::get('/thank-you', \App\Http\Livewire\ThankyouComponent::class)->name('thankyou');
Route::get('/about', \App\Http\Livewire\AboutComponent::class)->name('about');
Route::get('/blog', \App\Http\Livewire\BlogComponent::class)->name('blog');
Route::get('/privacy-policy', \App\Http\Livewire\PrivacyPolicyComponent::class)->name('privacy.policy');
Route::get('/term-conditions', \App\Http\Livewire\TermConditionsComponent::class)->name('term.conditions');

/* User Registration And Authentication */
Route::get('/register', 'App\Http\Controllers\UserController@create')->name('register.create');
Route::post('/register', 'App\Http\Controllers\UserController@store')->name('register.store');

Route::get('/login', 'App\Http\Controllers\UserController@loginForm')->name('login.create');
Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', \App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/orders', \App\Http\Livewire\User\UserOrdersComponent::class)->name('orders');
    Route::get('/order/{order_id}', \App\Http\Livewire\User\UserOrderDetailsComponent::class)->name('orderdetails');
    Route::get('/order/review/{order_item_id}', \App\Http\Livewire\User\UserReviewComponent::class)->name('review');
    Route::get('/change-password', \App\Http\Livewire\User\UserChangePasswordComponent::class)->name('changepassword');
});

Route::middleware(['admin'])->group(function (){
    Route::get('/admin/dashboard', \App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/categories', \App\Http\Livewire\Admin\AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', \App\Http\Livewire\Admin\AddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}', \App\Http\Livewire\Admin\EditCategoryComponent::class)->name('admin.category.edit');

    Route::get('/admin/products', \App\Http\Livewire\Admin\AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', \App\Http\Livewire\Admin\AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}', \App\Http\Livewire\Admin\AdminEditProductComponent::class)->name('admin.product.edit');

    Route::get('/admin/slider', \App\Http\Livewire\Admin\AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('/admin/slider/add', \App\Http\Livewire\Admin\AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');
    Route::get('/admin/slider/edit/{slide_id}', \App\Http\Livewire\Admin\AdminEditHomeSlideComponent::class)->name('admin.home.slide.edit');

    Route::get('/admin/orders', \App\Http\Livewire\Admin\AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}', \App\Http\Livewire\Admin\AdminOrderDetailsComponent::class)->name('admin.orderdetails');

    Route::get('/admin/contact-us', \App\Http\Livewire\Admin\AdminContactComponent::class)->name('admin.contact');
});
