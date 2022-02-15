
<body>

<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Registre de tous les matériels de pêche</h1>
            <br>
            <div class="list-group">
               <h4>Trier</h4>
               <u> <h5>Par prix :</h5></u>
                <a href="./?action=listeMateriel&filtre=prixASC" class="list-group-item">Prix croissant</a>
                <a href="./?action=listeMateriel&filtre=prixDESC" class="list-group-item">Prix décroissant</a>

                <u><h5>Par marque :</h5></u>
                <a href="./?action=listeMateriel&filtre=garlino" class="list-group-item">Garbolino</a>
                <a href="./?action=listeMateriel&filtre=sensas" class="list-group-item">Sensas</a>
                <a href="./?action=listeMateriel&filtre=DAM" class="list-group-item">DAM</a>
                <a href="./?action=listeMateriel&filtre=autain" class="list-group-item">Autain</a>
                <a href="./?action=listeMateriel&filtre=xsert" class="list-group-item">Xsert</a>

                <a href="./?action=listeMateriel&filtre=mitchell" class="list-group-item">Mitchell</a>
                <a href="./?action=listeMateriel&filtre=pafex" class="list-group-item">Pafex</a>






            </div>
            <br><br>
            <div class="list-group">
                <h5>Selectionner / N'afficher que : </h5>

                Type d'eau

                <a href="./?action=listeMateriel&filtre=canne" class="list-group-item">Cannes</a>
                <a href="./?action=listeMateriel&filtre=epuisette" class="list-group-item">Epuisettes</a>
                <a href="./?action=listeMateriel&filtre=moulinet" class="list-group-item">Moulinets</a>


            </div>
            <br>
            <!----
            <div class="list-group">
                Types de peches (à coup, a la mouche)
                <a href="#" class="list-group-item">A coup</a>
                <a href="#" class="list-group-item">A la mouche</a>
                <a href="#" class="list-group-item">Mer</a>
            </div>
            --->
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
                        <a href="#"><img class="card-img-top" class="zoom div img" src="./images/Materiel/<?= $ret[$i]->getChemin()?>.jpg" alt=""></a>
                        <div class="card-body">

                            <h4><b><?= $ret[$i]->getLibelleMateriel()?></b></h4>
                            <br>
                            <center>
                            <h5><li class="list-group-item list-group-item-info"><?= $ret[$i]->getPrixMoyenMateriel()?> €</li>
                            </h5></center>
                            <p>Marque : <?= $ret[$i]->getMarqueMateriel()?></p>

                            <U>Caracteristiques :</U>
                        </html>
<?php

                            if ($ret[$i]->getLongueurCanne() != NULL){
                            ?> <html>

                            <p>Brins : <?= $ret[$i]->getBrinsCanne()?></p>
                            <p>Poids : <?= $ret[$i]->getPoidsCanne()?></p>
                            <p>Longueur : <?= $ret[$i]->getLongueurCanne()?></p>
                            </html>

                            <?php
                            } elseif($ret[$i]->getLongueurMancheEpuisette() != NULL){
                            ?><html>
                            <p>Longueur du manche : <?= $ret[$i]->getLongueurMancheEpuisette()?></p>
                            <p>Brins : <?= $ret[$i]->getBrinsEpuisette()?></p>
                            <p>Poids : <?= $ret[$i]->getPoidsEpuisette()?></p>
                            <p>Profondeur : <?= $ret[$i]->getProfondeurEpuisette()?></p>
                            <p>Taille tête : <?= $ret[$i]->getTeteEpuisette()?></p>


                            </html>

                            <?php
                            } else {
                            ?><html>
                            <p>Capacité du moulinet: <?= $ret[$i]->getCapaciteMoulinet()?></p>
                            <p>Ratio : <?= $ret[$i]->getRatioMoulinet()?></p>
                            <p>Roulement : <?= $ret[$i]->getRoulementsMoulinet()?></p>
                            <p>Poids : <?= $ret[$i]->getPoidsMoulinet()?></p>




                            <?php
                            }
                            ?>

                            </html>




                            </p>
                        </div>
                        <div class="card-footer">
                            <center>  <a href="<?= $ret[$i]->getLien()?>" type="button" class="btn btn-primary btn-sm">Acheter l'article</a>

                            </center>
                        </div>
                        <div class="card-footer bg-transparent border-success"></div>

                        <div class="card-footer">
                          <center>
                              <a href="?action=supprimerMateriel&Id_Materiel=<?= $ret[$i]->getIdMateriel() ?>" type="button" class="btn btn-primary btn-sm">Supprimer</a>

                          </center>
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