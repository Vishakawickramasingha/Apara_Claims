<?php

use App\Http\Controllers\admin\TotalClaimsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\PendingClaimsController;
use App\Http\Controllers\admin\ApprovedClaimsController;
use App\Http\Controllers\admin\RejectedClaimsController;
use App\Http\Controllers\admin\OverdueLoanController;
use App\Http\Controllers\admin\LodgementOfClaimController;



use App\Http\Controllers\admin\ClaimsHomeController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('frontend.home');
});




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(TotalClaimsController::class)->middleware(['auth','verified'])-> group (function () {
   Route::get('/TotalClaimsIndex','Index')->name('total.index');
});
Route::controller(PendingClaimsController::class)->middleware(['auth','verified'])-> group (function () {
   Route::get('/PendingClaimsIndex','Index')->name('pending.index');
});
Route::controller(ApprovedClaimsController::class)->middleware(['auth','verified'])-> group (function () {
   Route::get('/ApprovedClaimsIndex','Index')->name('approved.index');
});
Route::controller(RejectedClaimsController::class)->middleware(['auth','verified'])-> group (function () {
   Route::get('/RejectedClaimsIndex','Index')->name('rejected.index');
});


Route::controller(OverdueLoanController::class)->middleware(['auth','verified'])-> group (function () {
   Route::get('/OverdueLoanIndex','Index')->name('OverdueLoan.index');
});

Route::controller(LodgementOfClaimController::class)->middleware(['auth','verified'])-> group (function () {
   Route::get('/LodgementOfClaimIndex','Index')->name('LodgementOfClaim.index');
});




require __DIR__.'/auth.php';
