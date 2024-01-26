<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Détails du produit</h1>

    <ul>
        <li><strong>Libellé:</strong> {{ $product['libelle'] }}</li>
        <li><strong>Marque:</strong> {{ $product['marque'] }}</li>
        <li><strong>Prix:</strong> {{ $product['prix'] }}</li>
        <li><strong>Stock:</strong> {{ $product['stock'] }}</li>
        <li><strong>Image:</strong> {{ $product['image'] ?? 'Aucune image' }}</li>
    </ul>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Retour à la liste des produits</a>
@endsection
