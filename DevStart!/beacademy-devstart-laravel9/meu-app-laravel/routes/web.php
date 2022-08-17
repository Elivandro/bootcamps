<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    TeamController,
    UserController,
    ViaCepController
};

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function (){
    Route::get("/", [UserController::class, "index"])->name("users.index");
    Route::get("/users/create", [UserController::class, "create"])->name("users.create");
    Route::post("/users", [UserController::class, "store"])->name("users.store");
    Route::put("/users/{id}", [UserController::class, "update"])->name("users.update");
    Route::get("/users/{id}/edit", [UserController::class, "edit"])->name("users.edit");
    Route::get("/users/{id}", [UserController::class, "show"])->name("users.show");
    Route::delete("/users/{id}/delete", [UserController::class, "destroy"])->name("users.destroy");

    Route::get("/user/team/{id}", [TeamController::class, 'show'])->name('team.show');

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/users/{id}/posts', [PostController::class, 'show'])->name('posts.show');


    Route::get("/viacep", [ViaCepController::class, "index"])->name("viacep.index");
    Route::post("/viacep", [ViaCepController::class, "index"])->name("viacep.index.post");
    Route::get("/viacep/{cep}", [ViaCepController::class, "show"])->name("viacep.show");
});

Route::middleware(['auth', 'admin'])->group(function (){
    route::get('/admin', [UserController::class, 'admin'])->name('admin');
});