<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de gestion des produits</title>
    <!-- Inclure les liens vers les feuilles de style CSS si nécessaire -->
    <!-- Exemple : <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
</head>
<body>

    <div class="container mt-3">
        @yield('content')
    </div>

    <!-- Inclure les scripts JavaScript si nécessaire -->
    <!-- Exemple : <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
