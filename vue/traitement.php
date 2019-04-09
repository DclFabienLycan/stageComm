<?php

include '../php/modele/pdo.php';

if(isset($_POST['update'])) {

    $test = $pdo->prepare("SELECT * FROM commentaires NATURAL JOIN utilisateurs WHERE statuts = 0");
    $test->execute();
    $tests = $test->fetch();
    

    if((!empty($_POST['nom']) && isset($_POST['nom'])) and (!empty($_POST['prenom']) && isset($_POST['prenom']))  and (!empty($_POST['messCommentaire']) && isset($_POST['messCommentaire']))) {
        
        $sql = "UPDATE commentaires SET statuts = '1' WHERE statuts = 0 AND idCommentaire = :id";
        $update = $pdo->prepare($sql);
        $update->bindParam(':id', $_POST['id']);
        $update->execute();

    }
    // echo 'Mise à jour effectuée';

}

header('Location:gestion.php');