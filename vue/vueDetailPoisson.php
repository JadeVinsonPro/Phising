<html>
<body>

<div class="container">
    <div class="row Photo et nom">
        <div class="col-md-5">
            <a href="#"><img class="card-img-top"  sizes="width=200% height=200%" src="./images/Poisson/<?= $poisson->getChemin()?>" alt=""></a>
        </div>



    <div class="col-md-3">
        <h1> <?= $poisson->getNomPoisson()?></h1>
    <p>Nom scientique : <?= $poisson->getNomScientifiquePoisson()?></p>
    <p>  Type eau : <?= $poisson->getTypeEauPoisson()->getLibelleTypeEau() ?> </p>
        <p>  Environnement du poisson : <?= $poisson->getIdLieuPechePoisson()->getLibelleLieuPeche() ?> </p>
        <p>Taille : <?= $poisson->getTaillePoisson()?>
        <p>Poids : <?= $poisson->getPoidsPoisson()?>
        </p>
    </div>
    </div>
    <div class="row Description">
        <div class="col-md-11">

           <h3> Description :</h3>
               <h4> <?= $poisson->getDescriptionPoisson()?></h4>

        </div>
    </div>
</div>

</body>
</html>