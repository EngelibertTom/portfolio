<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<!-- Ajoutez le contenu du menu ici -->
<nav>

    <div class="menu">
        <p>TOM ENGELIBERT</p>
        <a href="/home">Accueil</a>
        <a href="/home">Présentation</a>
        <a href='/projets'>Mes réalisations</a>
        <a href="#">Me contacter</a>
        <!-- Ajoutez d'autres éléments de menu selon vos besoins -->
    </div>
</nav>

<!-- Ajoutez une section pour le contenu spécifique à chaque vue -->
<div class="content">
    @yield('content')
</div>

<!-- Ajoutez d'autres scripts ou balises communes ici -->


<footer>

    <p>0619330674</p>
    <p>tom.engelibert@gmail.com</p>
    <p>Tom Engélibert</p>

</footer>
</body>
</html>
