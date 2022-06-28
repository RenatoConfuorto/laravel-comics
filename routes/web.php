<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$comics = collect(config('comics'));


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () use ($comics){
    $data = [
        'comics' => $comics
    ];
    // dd($data);
    return view('comics', $data);
})->name('comics');

Route::get('comic-page/{id}', function($id) use ($comics){
    $comic = $comics->where('id', $id)->first();
    $artists = collect($comic['artists'])->implode(', ');
    $writers = collect($comic['writers'])->implode(', ');
    // dd($artists);
    $data = [
        'comic' => $comic,
    ];
    return view('comic-page', $comic);
})->name('comic-page');
