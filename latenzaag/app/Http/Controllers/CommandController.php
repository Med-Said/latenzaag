<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CommandController extends Controller
{
     var $id;
     var $categories;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories = DB::table('articles_stocks')->distinct()->get('categorie');
   
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // include(app_path().'/Http/Controllers/helpers.php');
        $articles = DB::table('articles_stocks')->select('id', 'nom', 'prix', 'marque','description','img')->get();
        return view('commander',['articles' => $articles, 'categories' => $this->categories]);
    }

    public function articlesParGategories(Request $request)
    {
        $categorie = request()->categorie;
        $articlesParGategories = DB::table('articles_stocks')
        ->where('categorie', '=', $categorie)->get();
        return view('commander',['articlesParGategories' => $articlesParGategories,  'categories' => $this->categories]);
    }
}
