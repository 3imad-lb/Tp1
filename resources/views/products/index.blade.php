<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Liste des produits</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">Créer un produit</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Libellé</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $product['libelle'] }}</td>
                    <td>{{ $product['marque'] }}</td>
                    <td>{{ $product['prix'] }}</td>
                    <td>{{ $product['stock'] }}</td>
                    <td>
                        <a href="{{ route('products.show', $key) }}" class="btn btn-info">Détails</a>
                        <a href="{{ route('products.edit', $key) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('products.destroy', $key) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
