<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Events\PannierEvent;
class PannierController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //n'accepte que les utilisateurs authentifie
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        Event(new PannierEvent(request()->article));
        
        return redirect("commander");
    }

    public function showPannier(){
        

        return view('showPannier');
    }

    public function commander(Request $request){
        
        if(session('pannierArticlesIds') != null){
            //1. insert into commandes table
            $pannierArray = session('pannierArticlesIds');//une table associative contenant les articles (chaque articles sous forme d'une chaine de caractere.)
            //$articleAttributes = preg_split ("/\--/", $pannierArray); //0 : id, 1 : nom, 2 : prix, 3 : marque, 4 : description, 5 : img
            
            //calcul du montant a payer
            $montant = 0;
            foreach ($pannierArray as $key => $value) {
                $articleAttributes = preg_split ("/\--/", $value);
                $montant += $articleAttributes[2];
            }

            //insertion du montant dans la table commandes
            DB::table('commandes')->insert(
                ['montant' => $montant]
            );


            //2. insert into articles table
            //get just inserted commandes id
            $commandes_id = DB::table('commandes')->select(DB::raw('Max(id) as id '))->get();
            $commande_id = $commandes_id[0]->id;
            $this->insertCommandeArticlesIntoCommandesTable($commande_id, $pannierArray);

            //3. insert into users_commandes table
            $user_id = \Auth::user()->id;
            DB::table('users_commandes')->insert(
                ['users_id' => $user_id,
                'commandes_id' => $commande_id]
            );
        

            //empty  pannier and redirect to home
            $request->session()->forget(['pannierArticlesIds', 'nbrArticles']);
            return redirect('home');
        }
        else{
            return redirect('/');
        }
    }

    public function annulerCommande(Request $request){

        $request->session()->forget(['pannierArticlesIds', 'nbrArticles']);
         return redirect('/');  
    }


    //helpers fonctions (should be moved to helpers.php files (for organization and good practice purpose)
    public function insertCommandeArticlesIntoCommandesTable($commande_id, $stringFormatArticlesArray){
        foreach ($stringFormatArticlesArray as $key => $articleOnStringFormat) {
            $attributes = preg_split ("/\--/", $articleOnStringFormat);

            //0 : id, 1 : nom, 2 : prix, 3 : marque, 4 : description, 5 : img
            DB::table('articles')->insert(
                ['commandes_id' => $commande_id,
                'prix' => $attributes[2],
                'marque' => $attributes[3],
                'nom' => $attributes[1],
            ]
            );
        }
    }
}