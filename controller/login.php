<?php

require '../modele/pdo.php';

if(session_status() == PHP_SESSION_NONE) {
    // session_start();
    if(isset($_POST['login'])) {

        /* on test si les champ sont bien remplis */
        if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['password'])) {
            
            $connect = $pdo->prepare("SELECT * FROM utilisateurs WHERE nomutilisateur = :name AND idRole = '1'");
            $connect->bindParam(':name', $_POST['nom']);
            $connect->execute();
            $user = $connect->fetch();
            
            if (password_verify($_POST['password'], $user->motDePasse)) {
                session_start();
                $_SESSION['auth'] = $user;
                
                if(!$user) {
                    echo 'Mauvais identifiant ou mot de passe !';
                } else {
                    header('Location:../vue/gestion.php');
                }
            }
        }
    }
}