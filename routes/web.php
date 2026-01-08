<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('home');   // 👈 home.blade.php page load hoga
});

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








// Route::get('/shop', function () {
//     return "Shop Page Coming Soon";
// });
