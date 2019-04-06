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
        $id = \Auth::user()->id;//current user id

        $commandes = $users = DB::table('users_commandes')
            ->join('commandes', 'users_commandes.commandes_id', '=', 'commandes.id')
            ->select('users_commandes.commandes_id', 'commandes.montant')
            ->where('users_commandes.users_id', '=', $id)
            ->get();
        return view('home',['commandes' => $commandes]);
    }

     function chercher(Request $request){

        $mot = request()->mot;
        $res = DB::table('articles_stocks')->where('nom', 'like', '%' . $mot . '%')
        ->get();
        return view("resultats", ['res' => $res, 'mot' => $mot]);
    }
}
