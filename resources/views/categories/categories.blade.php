@extends('layout.layout')

@section('content')
    <div class="articles-container">
            <div class="articles-options">
                <a href='{{ route('add-category') }}' class="add-btn">Ajouter une catégorie</a>
                <h4>Liste des catégories</h4>
            </div> 
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->category_name }}</td>
                            <td><button>Action</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
    </div>
@endsection
