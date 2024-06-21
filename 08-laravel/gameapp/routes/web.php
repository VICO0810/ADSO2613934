<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/game/list', function() {
    $games = App\Models\Game::all();
    //var_dump($games);
    dd($games->toArray());
});

//Route ::get('/game/{$id}', function($id) {
//    $game = App\Models\Game::find($id);
//    dd($game->toArray());
// });

Route ::get('/games/', function() {
    $games = App\Models\Game::all();
    return view('listgames')->with('games',$games);
});

Route ::get('/users/challenge', function() {
    $users = App\Models\User::limit(20)->get();
    //dd($users->toArray());
    $code = "<table style='border-collapse;margin-inline: auto; font-family: Arial'>
    <tr>
    <th style='background: gray; color: white; padding: 0.4rem'>Id</th>
    <th style='background: gray; color: white; padding: 0.4rem'>Fullname</th>
    <th style='background: gray; color: white; padding: 0.4rem'>Age</th>
    <th style='background: gray; color: white; padding: 0.4rem'>Created At</th>
    </tr>";
    foreach($users as $user) {
        $code .= "<tr>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4'>".$user->id."</td>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4'>".$user->fullname."</td>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4'>".Carbon\Carbon::parse($user->birthdate)->age."years old</td>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4'>".$user->created_at->diffForHumans()."</td>";
        $code .= "<tr>";
    }
    return $code . "</table>";
});