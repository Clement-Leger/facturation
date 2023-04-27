@extends('layout.layout')


@section('content')

<div class="articles-container">
    <div class="articles-options">
        <a href='' class="add-btn">Ajouter un facture</a>
        <h4>Liste des factures</h4>
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

        </tbody>
    </table>

</div>

@endsection