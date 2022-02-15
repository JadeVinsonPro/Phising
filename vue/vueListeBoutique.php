<body>
<br>




<div class="container">

    <div class="row">


        <div class="col-lg-3">

            <h1 class="my-4">Boutiques validées</h1>
            <br>

            <div class="list-group">
                <h5>Option de modification ADMIN</h5>
                <a href="./?action=ajouterBoutique" class="list-group-item">Ajouter une boutique</a>

            </div>
            <!---
            <div class="list-group">
                <h5>Types de boutique :</h5>

                <button type="button" class="btn btn-primary" href="./?filtre=alpha" >Physique</button>
                <br>
                <button type="button" class="btn btn-primary" href="./?filtre=alpha" >En ligne</button>

            </div>
            -->
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
                        <a href="#"><img class="card-img-top"  src="./images/Boutique/<?= $ret[$i]->getChemin()?>.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"><b><?= $ret[$i]->getNomBoutique()?></b></a>
                            </h4>
<center>
    <p class="card-text"><?= $ret[$i]->getAdresseBoutique()?>
    <p><?= $ret[$i]->getCPBoutique()?> &nbsp <?= $ret[$i]->getVilleBoutique()?></p>

    </p>

                        </div>

                        <div class="card-footer">
                            <p><a href="?action=modifierPoisson" type="button" class="btn btn-primary btn-sm">Modifier</a></p>
                            </div>

                    </div>
                </div>
                </center>
                <?php
                $i++;
                }
                ?>
            </div>
            </html>

            gggffddtthfcxfdycyik


