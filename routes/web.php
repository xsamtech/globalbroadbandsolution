<?php
/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Public
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'checkEligibility']);
Route::get('/registration', [HomeController::class, 'registration'])->name('registration');
Route::post('/registration', [HomeController::class, 'registerCustomer']);
// Admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/admins', [HomeController::class, 'admins'])->name('admins');
    Route::post('/admins', [HomeController::class, 'addAdmin']);
    Route::get('/buildings', [HomeController::class, 'buildings'])->name('buildings');
    Route::get('/account', [HomeController::class, 'account'])->name('account');
    Route::post('/account', [HomeController::class, 'updateAccount']);
    Route::delete('/delete/{entity}/{id}', [HomeController::class, 'remove'])->name('remove');
});
Route::post('/buildings', [HomeController::class, 'addBuilding']);

require __DIR__.'/auth.php';
