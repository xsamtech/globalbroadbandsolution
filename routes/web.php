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

// Symbolic link
Route::get('/symlink', function () { return view('symlink'); })->name('generate_symlink');
// Public
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'checkEligibility']);
Route::get('/registration', [HomeController::class, 'registration'])->name('registration');
Route::post('/registration', [HomeController::class, 'registerCustomer']);
// Admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [HomeController::class, 'users'])->name('users');
    Route::post('/users', [HomeController::class, 'addUser']);
    Route::get('/buildings', [HomeController::class, 'buildings'])->name('buildings');
    Route::post('/buildings', [HomeController::class, 'addBuilding']);
    Route::get('/account', [HomeController::class, 'account'])->name('account');
    Route::post('/account', [HomeController::class, 'updateAccount']);
    Route::delete('/delete/{entity}/{id}', [HomeController::class, 'remove'])->name('remove');
});

require __DIR__.'/auth.php';
