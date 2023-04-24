@extends('layout.layout')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="articles-container">
        <form action="{{ route('create-supplier') }}" method="POST">
            @csrf
            <div class="articles-options">
                <h4>Ajout d'un fournisseur</h4>
                {{-- Utiliser un API pour envoyer le SIRET et récupérer les infos d'un fournisseur et transmettre les données directement dans le tableau --}}
            </div>    
            <div class="grid-article">
                <div class="article-column">
                    <label for="name">Nom du fournisseur</label>
                    <input name="name" type="text" placeholder="Mr.Dupont">
                    
                    <label for="email">Email</label>
                    <input name="email" type="text" placeholder="jnépahdmèl@exemple.com">
                    
                    <label for="company_name">Nom de la compagnie</label>
                    <input name="company_name" type="text" placeholder="Geadorlarjan">
                    
                    <label for="siret">SIRET</label> 
                    {{-- CREER UN SYSTEME DE FOURNISSEUR POUR PERMETTRE DE POUVOIR GERER CETTE OPTION NORMALEMENT --}}
                    <input name="siret" type="text" placeholder="N° SIRET">
                </div>
                
                <div class="article-column">
                    <label for="phone_number">Numéro de téléphone</label>
                    {{-- Select2 ne permet pas l'utilisation de width en pourcentage, ne pas retirer la balise width --}}
                    <input multiple="multiple" name="phone_number" placeholder="06 49 03...">

                    <label for="address">Adresse</label>
                    <input name ="address" type="text" placeholder="15 rue de la révolution">

                    <label for="country">Pays</label>
                    <input name="country" type="text" placeholder="Belgique">

                    <label for="post_code">Code Postal</label>
                    <input name="post_code" type="text" placeholder="Code Postal">

                    <button class="add-btn">Créer le fournisseur</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@component('components.script-component', 
    ['cdns' => [
        "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js",
        'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
        ],
    'scripts' => [
        'articles-js.js',
        ]
    ])
@endcomponent