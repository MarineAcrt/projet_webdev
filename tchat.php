<?php
$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');


if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message']))
{
    //on renomme les variables pour que ça soit plus pratique
    $pseudo = htmlspecialchars($_POST['pseudo']); 
    $message = htmlspecialchars($_POST['message']);
    // on insert les variables pseudo et message dans la base de données
    $insertmsg = $bdd->prepare("INSERT INTO tchat (pseudo, message) VALUES (?, ?)");
    $insertmsg->execute(array($pseudo, $message));
}
?>

<html>
    <head>
        <title>Tchat</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="">
            <input type="text" name="pseudo" placeholder="Pseudo" value="<?php if(isset($pseudo)) {echo $pseudo;} ?>"/><br/>
            <textarea type="text" name="message" placeholder="Message"></textarea><br/>
            <input type="submit" value="Envoyer"/> 
        </form>
        <?php
        //afficher tous les messages du tchat
        $allmsg = $bdd->query("SELECT * FROM tchat ORDER BY id DESC"); 
        while($msg = $allmsg->fetch())
        {
        ?>
        <b><?php echo $msg['pseudo']; ?> : </b><?php echo $msg['message']; ?><br />
        <?php
        }
        ?>
    </body>
</html>