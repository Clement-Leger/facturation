@extends('layout.layout')

@section('content')
    <div class="articles-container">
        <form action="{{ route('create-category') }}" method="POST">
            @csrf
            <div class="articles-options">
                <h4>Ajout d'une categorie</h4>
            </div>
            <div>
                <label for="category_name">Nom de la catégorie</label>
                <input name="category_name" type="text">
                <button class="add-btn">Créer la catégorie</button>
            </div>
        </form>
    </div>
@endsection