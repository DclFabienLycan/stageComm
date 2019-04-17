<?php
    // require 'class/database.php';
    require '../modele/pdo.php';
    // $db = new Database(/*$db_host, $db_name, $db_user, $db_pass*/);

    // On demarre la session pour le formulaire
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="debosselage, bosse, carrosserie, cailloux, caddie">
        <meta name="keywords" content="grele, projectiles, coups, portiere, peinture">
        <meta name="robots" content="noindex, follow">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
        <link rel="stylesheet" href="../css/design.css">
        <title>My DSP</title>
    </head>
    <body>
        <header>
        <div class="headerG">
            <h1 class="dsp">My DSP</h1>
            <div class="textHeader">
                <p class="text-incline">Débosselage Sans Peinture</p>
                <hr class="barre">
            </div>
            <p id="interv">Intervention chez professionnel et particulier</p>
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
            <div class="formFond">
                <h1 class="text-center h1Form">Formulaire de contact</h1>
                <!-- Condition des errors ou success -->
                <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
                <?php endif; ?>
                <?php if(array_key_exists('success',$_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email à bien été transmis !
                </div>
                <?php endif; ?>
                <!-- Début du formulaire avec les value pour la session -->
                <form action="../controller/verification.php" method="POST">
                    <div class="container formulaire">
                        <div class="form-row">
                            <div class="col-sm-3 offset-md-3">
                                <label for="" class="col-form-label">Nom :</label>
                                <input type="text" class="form-control" name="nomContact" placeholder="Votre Nom" value="<?php echo isset($_SESSION['inputs']['nomContact'])? $_SESSION['inputs']['nomContact'] : ''; ?>" required>
                            </div>
                            <div class="col-sm-3">
                                <label for="" class="col-form-label">Prénom :</label>
                                <input type="text" class="form-control" name="prenomContact" placeholder="Votre Prénom" value="<?php echo isset($_SESSION['inputs']['prenomContact'])? $_SESSION['inputs']['prenomContact'] : ''; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-3 offset-md-3">
                                <label for="" class="col-form-label">Numéro de Téléphone :</label>
                                <input type="tel" minlength="0" maxlength="10" pattern="[0-9]{10}" class="form-control" name="numeroTelContact" placeholder="Votre numéro de Téléphone" value="<?php echo isset($_SESSION['inputs']['numeroTelContact'])? $_SESSION['inputs']['numeroTelContact'] : ''; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 offset-md-3">
                                <label for="" class="col-form-label">Email :</label>
                                <input type="email" class="form-control" name="mailContact" placeholder="Votre Email" value="<?php echo isset($_SESSION['inputs']['mailContact'])? $_SESSION['inputs']['mailContact'] : ''; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 offset-md-3">
                                <label for="" class="col-form-label">Descriptif de votre demande :</label>
                                <textarea name="messageContact" id="textMess" cols="30" rows="10" maxlength="500" placeholder=" Votre message ici ..." required><?php echo isset($_SESSION['inputs']['messageContact'])? $_SESSION['inputs']['messageContact'] : ''; ?></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary subForm offset-md-3" name="formContact">Envoyer</button>
                    </div>
                </form>
            </div>
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

<?php

// on nettoie les données précédentes
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);

?>