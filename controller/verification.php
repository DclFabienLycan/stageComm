<?php

// Connexion à la BDD
include '../modele/pdo.php';

//on démarre la session
session_start();

// $errors = [];
// on crée une vérif de champs
$errors = array();

// on verifie l'existence du champ et d'un contenu
if(!array_key_exists('nomContact', $_POST) || $_POST['nomContact'] == '') {
  $errors ['nomContact'] = "vous n'avez pas renseigné votre nom";
  }
if(!array_key_exists('prenomContact', $_POST) || $_POST['prenomContact'] == '') {
  $errors ['prenomContact'] = "vous n'avez pas renseigné votre prénom";
  }
if(!array_key_exists('numeroTelContact', $_POST) || $_POST['numeroTelContact'] == '') {
  $errors ['numeroTelContact'] = "vous n'avez pas renseigné votre numéro de téléphone";
  }

// on verifie existence de la clé
if(!array_key_exists('mailContact', $_POST) || $_POST['mailContact'] == '' || !filter_var($_POST['mailContact'], FILTER_VALIDATE_EMAIL)) {
  $errors ['mailContact'] = "vous n'avez pas renseigné votre email";
  }

if(!array_key_exists('messageContact', $_POST) || $_POST['messageContact'] == '') {
  $errors ['messageContact'] = "vous n'avez pas renseigné votre message";
  }

//On check les infos transmises lors de la validation
if(!empty($errors)){
// si erreur on renvoie vers la page précédente
$_SESSION['errors'] = $errors;//on stocke les erreurs
$_SESSION['inputs'] = $_POST;
header('Location: ../vue/contactForm.php');

  }else{
    $_SESSION['success'] = 1;
    // Création des données à mettre dans le mail
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'FROM:' . htmlspecialchars($_POST['mailContact']);
    $to = ''; // Insérer votre adresse email ICI
    $subject = 'Message envoyé par ' . htmlspecialchars($_POST['nomContact']) . ' ' . htmlspecialchars($_POST['prenomContact']) ;
    $message_content = '
    <table>
    <tr>
    <td><b>Emetteur du message:</b></td>
    </tr>
    <tr>
    <td>'. $subject . '</td>
    </tr>
    <tr>
    <td><b>Contenu du message:</b></td>
    </tr>
    <tr>
    <td>'. htmlspecialchars($_POST['messageContact']) .'</td>
    </tr>
    <tr>
    <td><b>Coordonnées de recontact:</b></td>
    </tr>
    <tr>
    <td>Numéro de téléphone: '.' '. htmlspecialchars($_POST['numeroTelContact']) . '</td>
    </tr>
    <tr>
    <td>Adresse email: '.' '. htmlspecialchars($_POST['mailContact']) . '</td>
    </tr>
    </table>
    ';
    mail($to, $subject, $message_content, $headers);
    header('Location: ../vue/contactForm.php?confirm=success');
  }