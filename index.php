<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="debosselage, bosse, carrosserie, cailloux, caddie">
    <meta name="keywords" content="grele, projectiles, coups, portiere, peinture">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="css/design.css">
    <title>My DSP</title>
</head>
<body>
<?php 
    include 'include/header.php';
?>
    <!-- Menu de Navigation bootstrap -->
    <div class="menuD">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler burger" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="vue/gestion.php">Gestion</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="vue/commentaire.php">Commentaire</a>
                    </li>
                    <li class="nav-item active">
                        <a href="vue/apropos.php" class="nav-link">a propos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="vue/contactForm.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main>
        <!-- Première section de la page d'accueil -->
        <section id="sectionCarr">
            <!-- Carroussel d'image bootstrap, pour montrer réalisations -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="css/img/photo/206HayonGaucheAv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/206HayonGaucheAp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/308swHayonDroitAv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/308swHayonDroitAp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/c5AileArDroitAV.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/c5AileArDroitAp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/micraHayonDroitAv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/micraHayonDroitAp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/montantArGaucheAv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/montantArGaucheAp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/porteArDroitAv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/porteArDroitAp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/puntoHayonDroitAv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/puntoHayonDroitAp.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/sciroccoHayonGaucheAv.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/photo/sciroccoHayonGaucheAp.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- deuxième section de la page d'accueil -->
        <section id="sectionDeboss">
            <div class="container-fluid textPrix">
                <h3 class="text-center h3Sect">Le Débosselage</h3>
                <img src="css/img/dessin.svg" alt="a partir de 45€" id="textCount">
            </div>
            <span class="textExpli"><strong>Le débosselage sans peinture (DPS)</strong>&nbsp; est une technique permettant de retirer une bosse se trouvant sur la carrosserie d'un véhicule à l'aide de divers outils spécifiques.</span><br>
            <span class="textExpli">Le débosselage sans peinture s'exerce en massant la tôle par de multiples micro-impulsions, un savoir-faire méticuleux qui permet de retirer la bosse sans abîmer la peinture.</span><br> 
            <span class="textExpli">Le débosselage sans peinture permet de réparer tout type de bosses sur les carrosseries automobiles :</span>
            <ul>
                <li>Les impacts de grêle</li>
                <li>Les coups de portière</li>
                <li>Les coups de caddie</li>
                <li>Divers projectiles (balle, ballon, cailloux ...)</li>
            </ul>
            <span class="textExpli">C'est une technique beaucoup moins coûteuse que celle d'un carrossier, car elle ne nécessite aucun démontage d'élément, ni aucun produit de peinture.</span><br>
            <span class="textExpli">Le débosselage sans peinture présente donc plusieurs avantages :</span>
            <ul>
                <li>Rapidité et qualité : un temps d'intervention limité pour un résultat aussi probant qu'en carrosserie traditionnelle</li>
                <li>Respect de l'environnement : pas de peinture, donc pas de solvant ni diluant chimique</li>
                <li>Immobilisation limitée, qualité d'origine et cote maximale de votre véhicule préservées !!</li>
            </ul>
        </section>
    </main>
    <footer>
        <div class="zoneFooter">
            <a href="" title="" target="_blank"><img src="css/img/FBicon.svg" alt="facebook" class="facebook"></a>
            <a href="" title="" target="_blank"><img src="css/img/twitter.svg" alt="twitter" class="twitter"></a>
            <a href=""><img src="css/img/mentionsL.svg" alt="mentionsLegales" class="mentions"></a>
            <a href=""><img src="css/img/map.svg" alt="localisation" class="map"></a>
        </div>
        <?php include 'include/footer_cookie.php'; ?>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>