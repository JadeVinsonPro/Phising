<meta charset="utf-8" />


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




            </p>

        </div>

    </div>
</div>




    <?php
    $i++;
}
?>

