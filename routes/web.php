<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UserTeamsController;
use Illuminate\Support\Facades\Route;

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
    return view('homepage');
})->name('homepage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/decisions', function () {
    return view('decisions');
})->name('decisions');

Route::get('/matches', function () {
    return view('matches');
})->name('matches');

//Teams
Route::get('/teams', [TeamsController::class, 'index'])->name('teams');
Route::get('/my-teams', [UserTeamsController::class, 'index'])->name('user.teams');


//Teams crud
Route::get('teams/create.php', [TeamsController::class, 'create'])->name('teams.create');
Route::post('teams/create.php', [TeamsController::class, 'store'])->name('teams.store');

Route::get('/teams/edit/{team}', [TeamsController::class, 'edit'])->name('teams.edit');
Route::post('/teams/{team}', [TeamsController::class, 'update'])->name('teams.update');

Route::delete('/teams/{team}', [TeamsController::class, 'destroy'])->name('teams.destroy');


// Login crud
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
