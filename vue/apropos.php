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
    <link rel="stylesheet" href="../css/design.css">
    <title>My DSP</title>
</head>
<body>
<?php
    include '../include/header.php';
?>    
    <!-- Menu de Navigation bootstrap -->
    <div class="menuD">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler burger" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gestion.php">Gestion</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="commentaire.php">Commentaire</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="apropos.php" >a propos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contactForm.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main>
        <h2 class="text-center"></h2>
        <section id="descriptifApropos">
            <div class="textPropos offset-md-4">
                    <p>Ce sont 15 ans d'expérience dans la <em>carrosserie</em> automobile qui ont amené Romain GROSSET à créer MY DSP, spécialiste du <strong>débosselage sans peinture automobile</strong>.</p>
                    <p>Véritable passionné dans ce domaine, c'est au cours de son parcours qu'il a pu être en mesure de travailler pour MERCEDES-BENZ, AUDI, VOLSKWAGEN, Groupe PSA et encore bien d'autres...</p>
                    <p>Il a, à ce jour, déjà réalisé plusieurs centaines de véhicules afin de répondre aux besoins précis de sa clientèle, et sera ravi de vous accueillir parmis elle!</p>
            </div>
        </section>
    </main>
    <footer>
        <div class="zoneFooter">
            <a href=""  title="" target="_blank"><img src="../css/img/FBicon.svg" alt="facebook" class="facebook"></a>
            <a href=""  title="" target="_blank"><img src="../css/img/twitter.svg" alt="twitter" class="twitter"></a>
            <a href=""><img src="../css/img/mentionsL.svg" alt="mentionsLegales" class="mentions"></a>
            <a href=""><img src="../css/img/map.svg" alt="localisation" class="map"></a>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>