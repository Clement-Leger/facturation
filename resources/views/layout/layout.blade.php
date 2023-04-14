<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Fact'App</title>
</head>
<body>

    <nav>
        <label class="logo">Logo</label>

            <ul>
                <li><a class="active" href="#">Articles ▼</a>
                    <ul class="article-menu">
                        <li><a href="#">Ajouter un article</a></li>
                        <li><a href="#">Liste des articles</a></li>
                        <li><a href="#">Liste de stock</a></li>
                        <li><a href="#">Liste des prix</a></li>
                    </ul>
                </li>
                <li><a href="#">Devis</a></li>
                <li><a href="#">Bons</a></li>
                <li><a href="#">Factures</a></li>

    </nav>

    @yield('content')