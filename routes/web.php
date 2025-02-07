<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    // if(Auth::check()){
    //     if(Auth::user()->roleAs == '1'){
    //         return redirect()->route('admin.dashboard');
    //     }else{
    //         return redirect()->route('dashboard');
    //     }
    // } else {
    //     return view('welcome');
    // }
    return view('welcome');
});

// Admin Routes
Route::middleware(['auth', 'isAdmin', 'adminComponentLayout'])->prefix('admin')->name('admin.')->group(function () {
    // User Routes
    Route::prefix('students')->group(function () {
        Route::get('/', App\Livewire\Admin\Students\Index::class)->name('students.index');
    });

    Route::get('studentest', function () {
        // if(Auth::check()){
        //     if(Auth::user()->roleAs == '1'){
        //         return redirect()->route('admin.dashboard');
        //     }else{
        //         return redirect()->route('dashboard');
        //     }
        // } else {
        //     return view('welcome');
        // }
        return view('welcome');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
