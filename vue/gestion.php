<?php
    require '../php/modele/pdo.php';


    if(isset($_POST['login'])) {

        /* on test si les champ sont bien remplis */
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['password'])) {
            
            $connect = $pdo->prepare("SELECT * FROM utilisateurs WHERE nomutilisateur = :name AND idRole = '1'");
            $connect->bindParam(':name', $_POST['nom']);
            $connect->execute();
            $user = $connect->fetch();
            
            if (password_verify($_POST['password'], $user->motDePasse)) {
                
                if (!$user)
                {
                    echo "<br/><br/><br/>";
                    echo "<br/><br/><br/>";
                    echo 'Mauvais identifiant ou mot de passe !';
                }
                else {
                    session_start();

                }
            }
        }
    }
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
        <div class="container">
            <h2 class="text-center">Connexion Administrateur</h2>
            <div class="card bg-dark mt-4 pt-3">
            <?php if (session_status() == PHP_SESSION_ACTIVE){  ?>
                <a class="btn btn-outline-info" name="logout" id="logout" href="logout.php" role="button">Se déconnecter</a>
                <?php
            } else { ?>
                <form action="" method="POST">
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
            if(session_status() == PHP_SESSION_NONE) { ?>
                <div class="alert alert-danger mt-4 text-center" role="alert">
                    Vous devez être connecté pour l'accès à cette partie !!
                </div>
        <?php
            }
            else { ?>
                <section class="zoneCommentaire mt-4 mb-4">
                <?php 
                    $resultat = $pdo->query("SELECT * FROM commentaires NATURAL JOIN utilisateurs WHERE statuts = '0'");
                    $selectResult = $resultat->fetchAll();
                    $i=0;
                    
                    foreach ($selectResult as $selectResults) { 
                        $i++; 
                        $namePost = '"update'.$i.'"';
                        var_dump($namePost);
                         ?>
                        <form action="" method="POST">
                        <div class="container formulaire<?= $i ?>">
                            <div class="form-row">
                                <div class="col-sm-3 offset-md-3">
                                    <label for="" class="col-form-label">Nom :</label>
                                    <input type="text" class="form-control" name="nom" placeholder="Votre Nom" value="<?php echo $selectResults->nomUtilisateur; ?>" required>
                                </div>
                                <div class="col-sm-3">
                                    <label for="" class="col-form-label">Prénom :</label>
                                    <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom" value="<?php echo $selectResults->prenomUtilisateur; ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4 offset-md-3 mt-2">
                                    <span class="starsFunny">Veuillez noter :</span>
                                    <div class="stars">
                                    <?php 
                                        $nombreEtoile = $selectResults->noteCommentaire;
                                        
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
                                    <textarea name="messCommentaire" id="textMess" cols="30" rows="10" maxlength="500" placeholder=" Votre message ici ..." required><?php echo $selectResults->contenuCommentaire; ?></textarea>
                                </div>
                            </div>
                            <button type="submit" name=<?= $namePost ?> id="sub" class="btn btn-outline-info offset-md-3 mt-2">Mettre à jour</button>
                        </div>
                    </form>
                    <?php 
                       if(isset($_POST[$namePost])) {
                            error_log('ça passe ici !');
                    
                            if(!empty($_POST['nom']) and !empty($_POST['prenom'])  and !empty($_POST['messCommentaire'])) {
                                $sql = "UPDATE commentaires SET statuts = '1' WHERE statuts = 0";
                                $update = $pdo->prepare($sql);
                                $update->execute();
                                if(!$update->execute()) {error_log( $update->error );}
                                // $update->fetch();
                            }
                        }  else {
                            error_log ( 'je t\'emmerde et je passe là !');
                          }
                    } ?>
            </section>
        <?php 
        // <?php
     
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>

