<?php

namespace Eemi\Http\Controllers;

use Eemi\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /* cette methode est appelée dans routes/web.php via l'url */
    public function listeProduits(){

        $data['okok'] = 'Nimporte quoi';

        /* Je récupère tous les produits */

        // Ici j'envoie tous les produits, et chaque produit devient un objet PHP dont les propriétés sont les champs de la table Produit.
        $data['produits'] = Produit::all();

        /* Je les envoie à la vue */
        return view('liste_produits', $data);
    }

    public function formulaireProduit(){
        return view('form_produits');
    }
}
