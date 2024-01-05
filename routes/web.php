<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\PublicController; // Added this line
use App\Http\Controllers\BookRentController;

Route::get('/', [PublicController::class, 'index']);

Route::middleware('only_guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
    Route :: get('information', [AuthController::class, 'information']);

});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('profile', [UserController::class, 'profile']);
    Route :: get('information', [AuthController::class, 'information']);
});

Route::middleware(['only_admin'])->group(function () {
    Route::get('books', [BookController::class, 'index']);
    Route::get('book-add', [BookController::class, 'add']);
    Route::post('book-add', [BookController::class, 'store']);
    Route::get('book-edit/{slug}', [BookController::class, 'edit']);
    Route::post('book-edit/{slug}', [BookController::class, 'update'])->name('book-update');
    Route::get('book-delete/{slug}', [BookController::class, 'delete']);
    Route::get('book-destroy/{slug}', [BookController::class, 'destroy']);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('category-add', [CategoryController::class, 'add']);
    Route::post('category-add', [CategoryController::class, 'store']);
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('users', [UserController::class, 'index']);
    Route::get('registed-users', [UserController::class, 'registedUsers']);
    Route::get('user-detail/{slug}', [UserController::class, 'show']);
    Route::get('user-approve/{slug}', [UserController::class, 'approve']);
    Route::get('user-ban/{slug}', [UserController::class, 'delete']);
    Route::get('user-destroy/{slug}', [UserController::class, 'destroy']);
    Route::get('users-banned', [UserController::class, 'bannedUsers']);
    Route::get('user-restore/{slug}', [UserController::class, 'restore']);

    Route::get('category-edit/{slug}', [CategoryController::class, 'edit']);
    Route::put('category-edit/{slug}', [CategoryController::class, 'update']);
    Route::get('category-delete/{slug}', [CategoryController::class, 'delete']);
    Route::get('category-destroy/{slug}', [CategoryController::class, 'destroy']);
    Route::get('category-deleted', [CategoryController::class, 'deletedCategory']);
    Route::get('category-restore/{slug}', [CategoryController::class, 'restore']);
    Route :: get('book-rent', [BookRentController::class, 'index']);
    Route :: post('book-rent', [BookRentController::class, 'store']);
    Route :: get('book-return', [BookRentController::class, 'returnBook']);
    Route :: post('book-return', [BookRentController::class, 'saveReturnBook']);


});
Route::get('rent-logs', [RentLogController::class, 'index']);

