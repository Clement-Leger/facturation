@extends('layout.layout')


@section('content')

<div class="articles-container">
    <div class="articles-options">
        <a href='{{ route('add-article') }}' class="add-btn">Ajouter un article</a>
        <h4>Liste des articles</h4>
    </div>    
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Stock</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->article_name }}</td>
                    <td>{{ $article->price_excl }} €</td>
                    <td>{{ $article->price_incl }} €</td>
                    <td>{{ $article->stock }}</td>
                    <td><button>Action</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection