@extends('layout.layout')

@section('content')
    <div class="articles-container">
        <form action="{{ route('create-category') }}" method="POST">
            @csrf
            <div class="articles-options">
                <h4>Liste des fournisseurs</h4>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->supplier_name }}</td>
                                <td><button>Action</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>            
                <button class="add-btn">Ajouter un fournisseur</button>
            </div>
        </form>
    </div>
@endsection