<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="libelle" class="form-label">Libellé :</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{ old('libelle') }}" required>
            <!-- Utilisez la directive Blade pour afficher les erreurs de validation si nécessaire : -->
            @error('libelle')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="marque" class="form-label">Marque :</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque') }}" required>
            <!-- Utilisez la directive Blade pour afficher les erreurs de validation si nécessaire : -->
            @error('marque')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix :</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix') }}" required>
            <!-- Utilisez la directive Blade pour afficher les erreurs de validation si nécessaire : -->
            @error('prix')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock :</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}" required>
            <!-- Utilisez la directive Blade pour afficher les erreurs de validation si nécessaire : -->
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image :</label>
            <input type="file" class="form-control" id="image" name="image">
            <!-- Utilisez la directive Blade pour afficher les erreurs de validation si nécessaire : -->
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection
