<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/base.css">
        <title>Phising Jade Vinson</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="./js/General.js"></script>
        <style>
            .container-fluid {
                color: rgb(0, 137, 217);
            }

            .container-fluid1 {
                text-align: center;
                padding: 3px;
                background-color: rgb(0, 160, 218);
                color: #ffffff;
            }



        </style>

        <!-- favicons
    ================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="./images/VignettePoisson.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./images/VignettePoisson.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./images/VignettePoisson.png">
        <link rel="manifest" href="site.webmanifest">



    </head>
    <div class="container-fluid1">
        De nouveaux poissons ont été ajouté dans le répertoire. Allez le consulter
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img alt="Logo" href="./?action=defaut" src="./images/LogoPrincipal.png" class="pull-left">


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./?action=defaut">Accueil</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Répertoire
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./?action=listePoisson">Tous les poissons</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Poissons d'eau douce</a></li>
                            <li><a class="dropdown-item" href="#">Poissons d'eau de mer</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Matériel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./?action=listeMateriel">Tout</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="./?action=listeMateriel&filtre=canne">Cannes</a></li>
                            <li><a class="dropdown-item" href="./?action=listeMateriel&filtre=moulinet">Moulinets</a></li>
                            <li><a class="dropdown-item" href="./?action=listeMateriel&filtre=epuisette">Epuisettes</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./?action=listeBoutique">Les Boutiques</a>
                    </li>



                </ul>


            </div>
        </div>

    </nav>
<br><br>


</html>
