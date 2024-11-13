<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;
use Illuminate\Support\Facades\Route;

use App\Mail\NewUserWellcomeMail;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/email', function () {
    return new NewUserWellcomeMail();
});


Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile.show');


Route::middleware('auth')->group(function () {
    Route::post('follow/{user}', [FollowsController::class, 'store'])->middleware('auth');
    Route::get('/', [PostsController::class, 'index'])->middleware('auth');
    Route::get('/p/create', [PostsController::class, 'create'])->middleware('auth');
    Route::get('/p/{post}', [PostsController::class, 'show']);
    Route::post('/p', [PostsController::class, 'store'])->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
