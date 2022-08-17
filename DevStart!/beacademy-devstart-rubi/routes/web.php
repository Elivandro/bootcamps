<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  IndexController,
  UserController,
  AccountController,
  ProductController,
  OrderController,
  CategoryController,
};

require __DIR__.'/auth.php';

Route::controller(IndexController::class)->group(function(){
    Route::get('/', "index")->name("index.index");
    Route::get('/contato', "contact")->name("index.contact");

    Route::get('/cart', 'cart')->name("index.cart");
    Route::get('/buy-direct/{id}', 'buyDirect')->name("index.buyDirect");
    Route::get('/add-to-cart/{id}', 'addCart')->name("index.addCart");
    Route::put('/update-cart', 'update')->name("index.updateCart");
    Route::delete('/remove-from-cart', 'delete')->name("index.remove");
    Route::get('/order/confirm', 'confirmm')->name("index.confirm");
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user/entrar',"login")->name("users.login");
    Route::get('/user/registro',"create")->name("users.create");
    Route::post('/user/registrado', "store")->name("users.store");
    Route::post('/user',"auth")->name("users.auth");
});

Route::controller(AccountController::class)->group(function (){
  Route::get("/dashboard", "index")->name("account.index")->middleware('auth');
  Route::get("/user/sair", "logout")->name("account.logout")->middleware('auth');
  Route::get('/dashboard', "index")->name('account.index')->middleware('auth');
  Route::get('/dashboard/edit', "editdashboard")->name('account.update')->middleware('auth');
  Route::put('/dashboard/{id}/edited', "updatedashboard")->name('account.updated')->middleware('auth');
  Route::get('/new/address', "regAddress")->name('regaddress.index')->middleware('auth');
  Route::get('/new/phone', "regPhone")->name('regphone.index')->middleware('auth');
  Route::get('/update/{id}/address', "editaddress")->name('editaddress.index')->middleware('auth');
  Route::get('/update/{id}/phone', "editphone")->name('editphone.index')->middleware('auth');
  Route::put('/address/{id}/updated', "updateaddress")->name('updateaddress.updated')->middleware('auth');
  Route::put('/phone/{id}/updated',  "updatephone")->name('updatephone.updated')->middleware('auth');
  Route::post('/address/{id}/registered', "storeaddress")->name('create.address')->middleware('auth');
  Route::post('/phone/{id}/registered', "storephone")->name('create.phone')->middleware('auth');
  Route::delete("/phone/{id}/delete", "phonedestroy")->name("phone.destroy")->middleware('auth');
  Route::delete("/address/{id}/delete", "addressdestroy")->name("address.destroy")->middleware('auth');
});

Route::controller(ProductController::class)->group(function() {
  Route::get('/produto/novo',  'create')->name('products.create')->middleware('auth', 'admin');
  Route::post('/produto/adicionado', 'store')->name('products.store')->middleware('auth', 'admin');
  Route::get('/produto/{id}', 'show')->name('products.show')->middleware('auth', 'admin');
  Route::get('/produto/{id}/editar', 'edit')->name('products.edit')->middleware('auth', 'admin');
  Route::put('/produto/{id}', 'update')->name('products.update')->middleware('auth', 'admin');
  Route::delete('/produto/{id}', 'destroy')->name('products.destroy')->middleware('auth', 'admin');
});

Route::controller(OrderController::class)->group(function(){
    Route::get('/proceed-to-checkout', "checkout")->name("orders.checkout")->middleware('auth');
    Route::post('/proceed-to-checkout', "payments")->name("payments")->middleware('auth');
    Route::get('/boleto', 'boleto')->name('orders.boleto');
    Route::get('/order/index', "index")->name("orders.index")->middleware('auth');
    Route::get('/order/register', "create")->name("orders.create")->middleware('auth');
    Route::post('/order/save', "store")->name("orders.store")->middleware('auth');
    Route::get('/order/{id}', 'show')->name('orders.show')->middleware('auth');
    Route::get('/order/{id}/edit', "edit")->name("orders.edit")->middleware('auth');
    Route::get('/order/pagamento-aceito', "edit")->name("orders.paid");
    Route::post('/order/detalhes-pedido', 'showdetails')->name('orders.details')->middleware('auth');
    Route::get('/order/pagamento-recusado', "edit")->name("orders.refused");
    Route::put('/order/{id}', "update")->name("orders.update")->middleware('auth');
    Route::delete('/order/{id}', "destroy")->name("orders.destroy")->middleware('auth');
});

Route::controller(CategoryController::class)->group(function(){
  Route::get('/categoria/novo',  'create')->name("categories.create")->middleware('auth', 'admin');
  Route::post('/categoria/adicionado', 'store')->name("categories.store")->middleware('auth', 'admin');
  Route::get('/categoria/{id}/editar', 'edit')->name("categories.edit")->middleware('auth', 'admin');
  Route::put('/categoria/{id}', 'update')->name("categories.update")->middleware('auth', 'admin');
  Route::get('/categoria', "show")->name("categories.show")->middleware('auth', 'admin');
});
