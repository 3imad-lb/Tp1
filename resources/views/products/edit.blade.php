<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Modifier le produit</h1>

    <form action="{{ route('products.update', ['id' => $product['id']]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="libelle" class="form-label">Libellé :</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{ old('libelle', $product['libelle']) }}" required>
            @error('libelle')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Ajoutez le reste de vos champs de formulaire... -->

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection

