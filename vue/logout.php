<?php

session_start();
unset($_SESSION['auth']);

// $_SESSION['message_flash']['success'] = "Vous êtes maintenant déconnecté.";

header('Location: ../index.html');