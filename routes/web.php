<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 Route::controller(StudentController::class)->group(function (){
     Route::get('student','Student')->name('student');

 });

require __DIR__.'/auth.php';
Route::controller(AdminController::class)->group(function (){
    Route::get('admin/profile','AdminProfile')->name('admin.profile');
    Route::get('admin/logout','AdminLogout')->name('admin.logout');
    Route::post('admin/update/profile',"UpdateProfile")->name('admin.profile.update');
    Route::get('admin/dashboard','AdminDashboard')->name('admin.dashboard');

});
