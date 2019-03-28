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
    <!-- Header avec menu navigation -->
    <header>
        <div class="headerG">
            <h1 class="dsp">MY DSP</h1>
            <div class="textHeader">
                <p class="text-incline">Débosselage Sans Peinture</p>
                <hr class="barre">
            </div>
        </div>
        <div class="headerD">
            <div id="carouselExampleSlidesOnly" class="slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/700x200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/700x200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/700x200" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="menuD">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler burger" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html">Accueil</a>  <!-- Icone pour l'accueil à mettre -->
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gestion.php">Gestion</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="commentaire.php">Commentaire</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="apropos.html" >a propos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../php/contactForm.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main>
       <section class="commentaireZone mb-4 pt-4">
            <form action="" method="POST">
                <div class="container formulaire">
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
       <section class="affichageComentaire mb-4 pt-4">

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
    <script src="js/script.js"></script>
</body>
</html>

<?php 

require '../php/modele/pdo.php';

// ici les commentaires seront affiché, et possibilité d'en ajouter un via formulaire

if (isset($_POST['submit'])) {

    if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['star']) and !empty($_POST['messCommentaire'])) {

        $utilisateur = $pdo->prepare("INSERT INTO utilisateurs SET nomUtilisateur = :name, prenomUtilisateur = :prenom, idRole ='2'");
        $utilisateur->bindParam(':name', $_POST['nom']);
        $utilisateur->bindParam(':prenom', $_POST['prenom']);
        $utilisateur->execute();

        $id = $pdo->lastInsertId();

        $commentaire = $pdo->prepare("INSERT INTO commentaires SET contenuCommentaire = :comment, noteCommentaire = :note, statuts = '0', idUtilisateur = :id");
        $commentaire->bindParam(':comment', $_POST['messCommentaire']);
        $commentaire->bindParam(':note', $_POST['star']);
        $commentaire->bindParam(':id', $id);
        $commentaire->execute();
        var_dump($commentaire);

    }
}