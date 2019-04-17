<?php
// Connexion à la BDD
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
        <!-- Affichage des commentaires -->
        <section class="affichageCommentaire mb-4 pt-4 pb-4">
            <div class="appelAffichage mb-4 pt-4">
                <?php
                    $resultat = $pdo->query("SELECT * FROM commentaires NATURAL JOIN utilisateurs WHERE statuts = '1'");
                    $selectResult = $resultat->fetchAll();
                    $i=0;
                    
                // Pour chaque commentaire avec le statuts '1', les affichers
                foreach ($selectResult as $selectResults) { 
                    $i++; 
                    $id = $selectResults->idCommentaire;
                    
                ?>
                <div class="container affiComm">
                    <h3 class="text-center titreComm">Commentaire :</h3>
                    <div class="row zoneRow">
                        <div class="col-sm-6 mb-4 textAffi offset-md-3">Commentaire posté le : <?= $selectResults->dateCommentaire  ?></div>
                    </div>
                    <div class="row zoneRow">
                        <div class="col-sm-6 textAffi offset-md-3">
                        <?php
                        $nombreEtoile = $selectResults->noteCommentaire;
                                    
                        // Boucle pour l'affichage des étoiles
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
                    <div class="row zoneRow">
                        <div class="col-sm-3 textAffi offset-md-3"><?= $selectResults->nomUtilisateur ?></div>
                        <div class="col-sm-3 textAffi"><?= $selectResults->prenomUtilisateur ?></div>
                    </div>
                    <div class="row zoneRow">
                        <div class="col-sm-6 mb-4 textAffi offset-md-3"><?= $selectResults->contenuCommentaire ?></div>
                    </div>
                </div>
                <?php } ?>    
            </div>
        </section>
        <!-- Zone du formulaire d'envoi de commentaire -->
       <section class="commentaireZone mb-4 pt-4">
            <form action="" method="POST">
                <div class="container formulaireComm">
                    <div class="form-row">
                        <div class="col-sm-3 offset-md-3">
                            <label for="" class="col-form-label">Nom :</label>
                            <input type="text" class="form-control" name="nom" placeholder="Votre Nom" required>
                        </div>
                        <div class="col-sm-3">
                            <label for="" class="col-form-label">Prénom :</label>
                            <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom" value="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4 offset-md-3 mt-2">
                            <span class="starsFunny">Veuillez noter :</span>
                            <div class="stars">
                                <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
                                <label class="star star-1" for="star-1"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 offset-md-3">
                            <label for="" class="col-form-label">Votre commentaire :</label>
                            <textarea name="messCommentaire" id="textMess" cols="30" rows="10" maxlength="500" placeholder=" Votre message ici ..." required></textarea>
                        </div>
                    </div>
                    <button type="submit" name="submit" id="sub" class="btn btn-outline-info offset-md-3 mt-2">Poster</button>
                </div>
            </form>
       </section>
    </main>
    <footer>
        <div class="zoneFooter">
            <a href="" title="" target="_blank"><img src="../css/img/FBicon.svg" alt="facebook" class="facebook"></a>
            <a href="" title="" target="_blank"><img src="../css/img/twitter.svg" alt="twitter" class="twitter"></a>
            <a href=""><img src="../css/img/mentionsL.svg" alt="mentionsLegales" class="mentions"></a>
            <a href=""><img src="../css/img/map.svg" alt="localisation" class="map"></a>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>
</html>

<?php 

require '../modele/pdo.php';

// L' ajout de commentaire dans la bdd via formulaire

if (isset($_POST['submit'])) {

    if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['star']) and !empty($_POST['messCommentaire'])) {

        $utilisateur = $pdo->prepare("INSERT INTO utilisateurs SET nomUtilisateur = :name, prenomUtilisateur = :prenom, idRole ='2'");
        $utilisateur->bindParam(':name', $_POST['nom']);
        $utilisateur->bindParam(':prenom', $_POST['prenom']);
        $utilisateur->execute();

        $id = $pdo->lastInsertId();
        // $date = NOW();

        $commentaire = $pdo->prepare("INSERT INTO commentaires SET contenuCommentaire = :comment, noteCommentaire = :note, dateCommentaire = NOW(), statuts = '0', idUtilisateur = :id");
        $commentaire->bindParam(':comment', $_POST['messCommentaire']);
        $commentaire->bindParam(':note', $_POST['star']);
        $commentaire->bindParam(':id', $id);
        $commentaire->execute();

    }
}