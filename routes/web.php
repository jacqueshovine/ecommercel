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
    return view('homepage');
});

/* Création de l'URL et appel via NomController@methodeDuController */
Route::get('/produits', 'ProduitController@listeProduits');
Route::get('/formulaire', 'ProduitController@formulaireProduits');

Route::get('/articles', 'ArticleController@listeArticles');

