@extends('layout.layout')

@section('content')
    <div class="articles-container">
        <form action="{{ route('create-category') }}" method="POST">
            @csrf
            <div class="articles-options">
                <a href="{{ route('add-supplier') }}" class="add-btn">Ajouter un fournisseur</a>
                <h4>Liste des fournisseurs</h4>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Nom de la compagnie</th>
                            <th>Pays</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td>{{ $supplier->company_name }}</td>
                                <td>{{ $supplier->country }}</td>
                                <td><button>Action</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>            
            </div>
        </form>
    </div>
@endsection