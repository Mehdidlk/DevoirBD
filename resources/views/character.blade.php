<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/welcome.css">
</head>

<div class="navbar">
    <nav>
        <ul>
            <li><a href="/">Accueuil</a></li>
            <li><a href="/personnages">Personnages</a></li>
            <li><a href="/ajout">Ajout d'une BD</a></li>
        </ul>
    </nav>
</div>
</div>

<body>
    <h1>Infos Personnages</h1>

    <table border="1">
        <tr>
            <td>Nom du personnage</td>
            <td>Premiere parution</td>
            <td>Dessinateur</td>
            <td>Nom du livre</td>
        </tr>
    </table>
</body>