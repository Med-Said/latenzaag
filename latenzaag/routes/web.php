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
})->name('index');



//'verify' -> middleware n'autorise que les utilisateur ligitime(verified there emails)
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('resultats', 'HomeController@chercher');

Route::get('commander', 'CommandController@index');
Route::get('categorie', 'CommandController@articlesParGategories');

Route::post('pannier', 'PannierController@index')->name("pannier");
Route::get('affichPannier', 'PannierController@showPannier')->name("affichPannier");
Route::post('lancerCommande', 'PannierController@commander')->name("lancerCommande");
Route::get('annulerCommande', 'PannierController@annulerCommande')->name("annulerCommande");

Route::get('manage','AdminController@index')->name('manage');
// send data :  (users, commandes and articles)
Route::get('manage/{table}', 'AdminController@sendData')->name('sendData');
Route::resource('articles_stocks', 'ArticleStockController');



Route::get('denied',function ()
{
    return view('admin.403');
})->name('denied');


Route::get('construction',function(){
    return view('construction'); 
})->name('construction');
