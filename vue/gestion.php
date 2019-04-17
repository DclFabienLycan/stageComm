<?php

// On démarre une session si aucune n'est présente
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Appel de la BDD
require '../modele/pdo.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="debosselage, bosse, carrosserie, cailloux, caddie">
    <meta name="keywords" content="grele, projectiles, coups, portiere, peinture">
    <meta name="robots" content="index, follow">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
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
        <!-- Partie de connexion admin -->
        <div class="container">
            <h2 class="text-center">Connexion Administrateur</h2>
            <div class="card bg-dark mt-4 pt-3">
            <?php 
            // Si une session est active, changement du menu
            if (isset($_SESSION['auth'])){  ?>
                <a class="btn btn-outline-info" name="logout" id="logout" href="../controller/logout.php" role="button">Se déconnecter</a>
                <?php
                // Sinon, on active le menu de connexion
            } else { ?>
                <form action="../controller/login.php" method="POST">
                    <div class="container formulaire">
                        <div class="form-row">
                            <div class="col-sm-3 offset-md-2">
                                <label for="" class="col-form-label">Nom :</label>
                                <input type="text" class="form-control" name="nom" placeholder="Votre Nom" required>
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="col-form-label">Prénom :</label>
                                <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom" value="" required>
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="col-form-label">Mot de passe :</label>
                                <input type="password" class="form-control" name="password" placeholder="Votre Mot de passe" value="" required>
                            </div>
                        </div>
                        <button type="submit" name="login" id="login" class="btn btn-outline-info offset-md-2 mt-2">Connexion</button>
                    </div>
                </form>
            <?php } ?>
            </div>
        </div>
        <?php
        // Si la session est active et admin log, affichage des commentaires qui ont le statuts à "0"
            if(isset($_SESSION['auth'])) { ?>
                <section class="zoneCommentaire mt-4 mb-4">
                <?php 
                $resultat = $pdo->query("SELECT * FROM commentaires NATURAL JOIN utilisateurs WHERE statuts = '0'");
                $selectResult = $resultat->fetchAll();
                $i=0;
                
                foreach ($selectResult as $selectResults) { 
                    $i++; 
                    $id = $selectResults->idCommentaire;
                    ?>
                    
                    <h3 id="comm" class="text-center">Commentaire n°<?= $id ?></h3>
                    <form action="../controller/traitement.php" method="POST" enctype="multipart/form-data" class="myForm">
                    <div class="container formulaire<?= $i ?>">
                        <div class="form-row">
                            <div class="col-sm-3 offset-md-3">
                                <label for="" class="col-form-label">Nom :</label>
                                <input type="text" class="form-control" name="nom" placeholder="Votre Nom" value="<?= $selectResults->nomUtilisateur; ?>" required>
                                <input type="hidden" value=<?= $id ?> name="id">
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="col-form-label">Prénom :</label>
                                <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom" value="<?= $selectResults->prenomUtilisateur; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-4 offset-md-3 mt-2">
                                <span class="starsFunny">Veuillez noter :</span>
                                <div class="stars">
                                <?php 
                                    $nombreEtoile = $selectResults->noteCommentaire;
                                    // Boucle pour l'affichage de étoiles
                                    for($j=1; $j<=$nombreEtoile; $j++) {
                                        if ($nombreEtoile == 1) {
                                            $colorClass = 'lowStar';
                                        } elseif ($nombreEtoile >= 2 && $nombreEtoile <= 4) {
                                            $colorClass = 'middleStar';
                                        } elseif ($nombreEtoile == 5) {
                                            $colorClass = 'maxStar';
                                        }
                                            echo ('<input class="star star-'. $nombreEtoile .' '. $colorClass.'" type="radio" name="star"/>');
                                            echo ('<label class="star star-'. $nombreEtoile .' '. $colorClass.'" for="star-'. $nombreEtoile . '"></label>');
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 offset-md-3">
                                <label for="" class="col-form-label">Votre commentaire :</label>
                                <textarea name="messCommentaire" cols="30" rows="10" maxlength="500" placeholder=" Votre message ici ..." required><?= $selectResults->contenuCommentaire; ?></textarea>
                            </div>
                        </div>
                        <button type="submit" name="update" class="btn btn-outline-info offset-md-3 mt-2 sub">Mettre à jour</button>
                        <button type="submit" name="delete" class="btn btn-danger offset-md-3 mt-2 sub">Supprimer</button>
                    </div>
                    </form>
                <?php 
            } ?>
            <div id="affichageText">
                <?php 
                // To fix : Ajax, pour l'affichage de la div
                if(isset($_POST['update'])) {
                    echo '<div class="alert alert-success text-center mt-4" role="alert">Mise à jour bien effectuée</div>';
                }
                ?>
            </div>
        </section>
    <?php 
        }   else { ?>
                <div class="alert alert-danger mt-4 text-center" role="alert">
                    Vous devez être connecté pour l'accès à cette partie !!
                </div>
        <?php
            } ?>
    </main>
    <footer>
        <div class="zoneFooter">
            <a href="" title="" target="_blank"><img src="../css/img/FBicon.svg" alt="facebook" class="facebook"></a>
            <a href="" title="" target="_blank"><img src="../css/img/twitter.svg" alt="twitter" class="twitter"></a>
            <a href=""><img src="../css/img/mentionsL.svg" alt="mentionsLegales" class="mentions"></a>
            <a href=""><img src="../css/img/map.svg" alt="localisation" class="map"></a>
        </div>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>