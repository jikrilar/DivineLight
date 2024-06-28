<?php

use App\Http\Controllers\NodeMCUController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\TechnicianController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('society', SocietyController::class);
    Route::resource('technician', TechnicianController::class);
    Route::get('/repair/create/{report}', [RepairController::class, 'create'])->name('repair.create');
    Route::post('/repair/store/{report}', [RepairController::class, 'store'])->name('repair.store');
});

Route::get('/controlling', [NodeMCUController::class, 'relay'])->name('controlling');
Route::post('/relay/changeState', [NodeMCUController::class, 'changeState'])->name('relay.changeState');
Route::get('/relay/sendState', [NodeMCUController::class, 'sendState'])->name('relay.sendState');

Route::get('/monitoring', [NodeMCUController::class, 'monitoring'])->name('monitoring');
Route::get('/sensorDataStore/{power}/{energy}/{voltage}/{current}', [NodeMCUController::class, 'sensorDataStore']);
Route::get('/api/power-consumption', [NodeMCUController::class, 'getDataRealtime']);


Route::middleware('auth')->group(function () {
    Route::get('/repair', [RepairController::class, 'index'])->name('repair.index');
    Route::resource('report', ReportController::class);
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/passwordUpdate', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
