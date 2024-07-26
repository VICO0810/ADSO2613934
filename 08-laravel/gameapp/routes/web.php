<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', function(){
    $games = App\Models\Game::all();
    return view('listgames')->with('games', $games);
});

Route::get('/catalogue', function(){
    return view('catalogue');
});

Route::get('/game/show/{id}', function($id){
    $game = App\Models\Game::find($id);
    dd($game->toArray());
});

Route::get('/game/show/{id}', function(){
    $game = App\Models\Game::find(request()->id);
    dd($game->toArray());
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('profile/show', [ProfileController::class, 'show'])->name('profile.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
