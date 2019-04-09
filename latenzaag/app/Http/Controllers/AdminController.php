<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{

    var $utilisateurs;
    var $articles;
    var $commandes;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->utilisateurs = DB::table('users')->get();

        $this->articles = DB::table('articles_stocks')->get();
        $this->commandes = DB::table('users')
                            ->join('users_commandes', 'users.id', '=', 'users_commandes.users_id')
                            ->join('commandes', 'commandes.id', '=', 'users_commandes.commandes_id')
                            ->select('commandes.id', 'users.id as user_id', 'users.name as user_name', 'users.tel', 'commandes.id as commandes_id', 'commandes.montant as commande_montant')
                            ->get();


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('admin.admin', ['users' => $this->utilisateurs]);
    }


    public function sendData(Request $request, $table){

                switch($table){
            case "users" :
                return view('admin.admin',['users' => $this->utilisateurs]);break;
            case "articles" :
                return view('admin.admin',['articles'=> $this->articles]);break;
            case "commandes" : 
                return view('admin.admin',['commandes'=> $this->commandes]);break;
            default : 
                return view('admin.admin',['attack'=> $table]);
        }
    }
}
