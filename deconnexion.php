<?php
session_start();
$_SESSION = array();
//quitter la session
session_destroy();
//rediriger vers la page de connection
header('Location: signin.php');