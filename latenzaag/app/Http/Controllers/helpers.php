<?php


function getCommandeArticles($commandeId){
    return DB::table('articles')->select('nom', 'marque', 'prix')
                ->where('commandes_id', '=', $commandeId)
                ->get();
}
