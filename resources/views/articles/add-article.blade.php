@extends('layout.layout')


@section('content')

<div class="articles-container">
    <div class="articles-options">
        <h4>Ajout d'un article</h4>
    </div>    
    <div>
        <label for="article_name">Nom de l'article :</label>
        <input type="text" placeholder="Votre nouvel article">
        <label for="price_excl">Prix hors taxe</label>
        <input type="text" placeholder="00.00">
        <label for="price_incl">Prix toute taxe comprise</label>
        <input type="text" placeholder="00.00">
        <label for="taxe_rate">Pourcentage de TVA</label>
        <input type="text" placeholder="0">
        <label for="stock">Quantité en stock</label>
        <input type="text" placeholder="0">
        <label for="supplier">Fournisseur</label>
        <select name="" id="">
            <option value="Tartanpion">Tartanpion</option>
        </select>
    </div>
</div>

@endsection

@include('layout.end-layout')