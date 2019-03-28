<?php

require '../php/modele/pdo.php';

?>

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

<?php
if (isset($_POST['login']))
{

/* on test si les champ sont bien remplis */
    if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['password']))
    {

        $creationUtilisateur = $pdo->prepare("INSERT INTO utilisateurs SET nomUtilisateur = :username, prenomUtilisateur = :prenom, motDePasse = :password, idRole = '1'");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $creationUtilisateur->bindParam(':username', $_POST['nom']);
        $creationUtilisateur->bindParam(':prenom', $_POST['prenom']);
        $creationUtilisateur->bindParam(':password', $password);
        $creationUtilisateur->execute();
    }
}
?>
<!-- $('#searchSubmit').off('click').click(function()
    {
    $.ajax({
        "url": "display_picture_folder",
        "type": "POST",
        "dataType": "json",
        "data":
        {
        "csrf_token": readCookie('csrf_cookie'),
        "id_folder": $('#folderHidden').val(),
        'searchName': $('#searchName').val()

        },

        "success": function(p_Data)
        {
        $('#displayPicture').html(p_Data.tpl);
        setTimeout(function(){init_new_picture(); init_picture_options();}, 500);
        },

        "error": function(p_JqXHR, p_TextStatus, p_ErrorThrown)
        {
        console.log(p_ErrorThrown);
        }
    });
});  -->

<?php 

$star = $selectResults->noteCommentaire;

if ($star == 5) {
    echo '<input class="star maxStar" type="radio" name="star"/>';
    echo '<label class="star star-5" for="star-5"></label>';
    echo '<input class="star maxStar" type="radio" name="star"/>';
    echo '<label class="star star-5" for="star-5"></label>';
    echo '<input class="star maxStar" type="radio" name="star"/>';
    echo '<label class="star star-5" for="star-5"></label>';
    echo '<input class="star maxStar" type="radio" name="star"/>';
    echo '<label class="star star-5" for="star-5"></label>';
    echo '<input class="star maxStar" type="radio" name="star"/>';
    echo '<label class="star star-5" for="star-5"></label>'; 
} else if ($star == 4) {
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-4" for="star-4"></label>';
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-4" for="star-4"></label>';
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-4" for="star-4"></label>';
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-4" for="star-4"></label>';
} else if ($star == 3) {
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-3" for="star-3"></label>';
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-3" for="star-3"></label>';
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-3" for="star-3"></label>';
} else if ($star == 2) {
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-2" for="star-2"></label>';
    echo '<input class="star middleStar" type="radio" name="star"/>';
    echo '<label class="star star-2" for="star-2"></label>';
} else {
    echo '<input class="star lowStar" type="radio" name="star"/>';
    echo '<label class="star star-1" for="star-1"></label>';
}
