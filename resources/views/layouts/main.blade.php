<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/welcome.css">
</head>

<body>
    <div class="container">
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
    @yield('index')
    <div class="row">
        <div class="col">
            <h1>Les personnages</h1>
            <p>Les tout derniers personnages mit sur le site avec leurs dates de parutions mais aussi leurs sorties et auteur</p>
            <button>Explore</button>
        </div>
        <div class=col>
            <div class="perso perso1">
                <h5>Batman</h5>
                <p>c'est pas une bd</p>

            </div>

            <div class="perso perso2">
                <h5>Jerry</h5>
                <p>La putain de souris</p>

            </div>

            <div class="perso perso3">
                <h5>Astérix</h5>
                <p>Il boit</p>

            </div>

            <div class="perso perso4">
                <h5>Gaston la gaffe</h5>
                <p>Il gaffe</p>

            </div>

        </div>
    </div>

</body>

</html>