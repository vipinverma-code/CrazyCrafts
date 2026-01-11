<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');




// SHOP
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/product/{slug}', [ShopController::class, 'detail'])->name('product.detail');


// CART
Route::post('/add-to-cart', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update']) ->name('cart.update');



// CHECKOUT (Phase 2 me payment + email add hoga)
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('order.place');
Route::get('/order-success', function () {
    return view('order-success');
})->name('order.success');
// Our story page route
Route::get('/our-story', function () {
    return view('our-story');
})->name('our.story');
// CONTACT US
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');








