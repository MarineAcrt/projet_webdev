<?php
// connection à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
    if(isset($_GET['pseudo'], $_GET['key']) AND !empty($_GET['pseudo']) AND !empty($_GET['key']));
    {
        $pseudo = htmlspecialchars(urldecode($_GET['pseudo'])); 
        $key = htmlspecialchars($_GET['key']);
        $requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND confirmkey = ?"); 
        $requser->execute(array($pseudo, $key));
        $userexist = $requser->rowCount();
        
        //si l'user existe, on rentre dans la boucle
        if($userexist == 1)
        {
            $user = $requser->fetch();
            if($user['confirmer' == 0]) //si l'état de confirmation est à 0, on rentre dans la boucle pour le changer à 1
            {
                $updateuser = $bdd->prepare("UPDATE membres SET confirmer = 1 WHERE pseudo = ? AND confirmkey = ?"); 
                $updateuser->execute(array($pseudo, $key));
                echo "Votre compte a bien été confirmé !";
            }
            else
            {
                echo "Votre compte a déjà été confirmé !";
            }
        }
        else
        {
            echo "l'utilisateur n'existe pas !";
        }
    }


?>
