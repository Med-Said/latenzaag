<?php

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

    $articles = DB::table('articles_stocks')->paginate(5);
    // $articles = DB::table('articles_stocks')->select('id', 'nom', 'prix', 'marque')->get();
    // return view('home');
    return view('index', ['articles' => $articles]);
    // return view('index');
    // return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//middleware n'autorise que les utilisateur ligitime(verifid there emails)
Route::get('profile', function () {
    return "welcom verified user" ;
})->middleware('verified');


Route::get('/index', function () {
    return view('index');
});



Route::get('/test', function () {
    return view('test');
});
