@extends('layout.layout')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="articles-container">
        <form action="" method="POST">
            @csrf
            <div class="articles-options">
                <h4>Ajout d'un article</h4>
            </div>    
            <div class="grid-article">
                <div class="article-column">
                    <label for="article_name">Nom de l'article</label>
                    <input type="text" placeholder="Votre nouvel article">
                    
                    <label for="price_excl">Prix HT</label>
                    <input type="text" placeholder="00.00">
                    
                    <label for="taxe_rate">Pourcentage de TVA</label>
                    <input type="text" placeholder="0">
                    
                    <label for="supplier">Fournisseur</label> 
                    {{-- CREER UN SYSTEME DE FOURNISSEUR POUR PERMETTRE DE POUVOIR GERER CETTE OPTION NORMALEMENT --}}
                    <select class="suppliers" name="suppliers">
                        <option value="Tartanpion">Tartanpion</option>
                        <option value="test">test</option>
                    </select>
                </div>
                
                <div class="article-column">
                    <label for="article_name">Catégorie de l'article</label>
                    {{-- Select2 ne permet pas l'utilisation de width en pourcentage, ne pas retirer la balise width --}}
                    <select style="width: 100%" class="categories" multiple="multiple" name="categories">
                        <option value="cate">cate</option>
                        <option value="cate2">cate2</option>
                    </select>

                    <label for="price_incl">Prix TTC</label>
                    <input type="text" placeholder="00.00">

                    <label for="stock">Quantité en stock</label>
                    <input type="text" placeholder="0">

                    <button class="add-btn">Créer l'article</button>
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