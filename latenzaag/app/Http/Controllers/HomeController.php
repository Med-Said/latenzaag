<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $articles = DB::table('articles_stocks')->select('id', 'nom', 'prix', 'marque')->get();
        return view('home');
        // return view('index', ['articles' => $articles]);
    }

    public function chercher(Request $request){

        $mot = request()->mot;
        $res = DB::table('articles_stocks')->where('nom', 'like', '%' . $mot . '%')
        ->get();
        return view("resultats", ['res' => $res, 'mot' => $mot]);
    }
}
