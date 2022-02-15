

<body>
<br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Répertoire</li>
    </ol>



<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Répertoire des poissons</h1>
            <br>
            <a href="./?action=listePoisson" class="list-group-item">Afficher tout</a>
            <br>
            <form method="POST" action='./?action=recherche' class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2"  type="search" name="entre" placeholder="Recherche de poissons" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>

            <h5>Afficher par ordre :</h5>
            <br>
            <div class="list-group">


                <a href="./?action=listePoisson&filtre=alpha" class="list-group-item">Alphabétique croissant</a>
                <a href="./?action=listePoisson&filtre=alphaDESC" class="list-group-item">Alphabétique décroissant</a>
            </div>
            <br>
            <h5>Afficher par type eau :</h5>
            <br>
            <div class="list-group">


                <a href="./?action=listePoisson&filtre=eaudouce" class="list-group-item">Eau douce</a>
                <a href="./?action=listePoisson&filtre=eausalee" class="list-group-item">Eau salée</a>
            </div>
            <br>

            <div class="list-group">
                <h5>Famille du poisson :</h5>
                <br>
                <a href="./?action=listePoisson&filtre=famEsocidae" class="list-group-item">Esocidae</a>
                <a href="./?action=listePoisson&filtre=famCyprinidae" class="list-group-item">Cyprinidae</a>
                <a href="./?action=listePoisson&filtre=famPercidae" class="list-group-item">Percidae</a>
                <a href="./?action=listePoisson&filtre=famSalmonidae" class="list-group-item">Salmonidae</a>
            </div>
                    <br>


        </div>

        <div class="col-lg-9">


            <div class="row">

                <?php
                $i = 0;

                while($i < count($ret)){
                ?>
                <html>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top"  src="./images/Poisson/<?= $ret[$i]->getChemin()?>" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="?action=detailPoisson&Id_Poisson=<?= $ret[$i]->getIdPoisson() ?>"><b><?= $ret[$i]->getNomPoisson()?></b></a>
                            </h4>
                            <h5><b><?= $ret[$i]->getNomScientifiquePoisson()?></b></h5>
                            <!--
                            <?php //echo "<a href='./?action=detail&idR=" . $listeRestos[$i]['idR'] . "'>" . $listeRestos[$i]['nomR'] . "</a>"; ?>
                            -->
                            <p class="card-text">
                            <p>Famille : <?= $ret[$i]->getFamillePoisson()?></p>
                            <p>Taille : <?= $ret[$i]->getTaillePoisson()?></p>
                            <p>Poids : <?= $ret[$i]->getPoidsPoisson()?></p>


                           <!-- <div class="card-footer bg-transparent border-success">
                        </div>
                            <div class="card-footer">
                                <center>  <a href="?action=modifierPoisson&Id_Poisson=<?/*= $poisson->getIdPoisson() */?>" type="button" class="btn btn-primary btn-sm">Modifier</a>
                                        <a href="#"<?/*= $poisson->supprimerPoisson() */?>" type="button" class="btn btn-primary btn-sm">Supprimer</a>
                                </center>
                            </div>
-->


                            </p>

                        </div>

                    </div>
                </div>




        <?php
        $i++;
        }
        ?>
            </div>
            </html>








    </div>
</div>

</body>
