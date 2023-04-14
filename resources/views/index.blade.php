@extends('layout.layout')


@section('content')

<div class="articles-container">
    <div class="articles-options">
        <button class="add-btn">Ajouter un article</button>
        <h4>Liste des articles</h3>
    </div>    
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->article_name }}</td>
                    <td>{{ $article->price_excl }} €</td>
                    <td>{{ $article->price_incl }} €</td>
                    <td>{{ $article->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection

@include('layout.end-layout')