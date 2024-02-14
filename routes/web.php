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

Route::get('/', function () {

    $comics = config('comics');

    return view('main',compact('comics'));
})->name('comics');

Route::get('/main/{param}', function($param) {

    $comics = config('comics');

    $comic = null;
    foreach ($comics as $item ) {
        if($item['id'] == $param){
            $comic = $item;
        }
    }

    return view('single', compact('comic'));
})->name('single');
