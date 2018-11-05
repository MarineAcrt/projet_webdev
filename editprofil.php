<?php
//connection à la session de l'utilisateur
session_start();
//connection à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
if(isset($_SESSION['id']))
{
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?"); 
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   
   
   //permet de changer le pseudo de l'utilisateur
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
   {
       $newpseudo = htmlspecialchars($_POST['newpseudo']);
       $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
       $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
       header('Location: index_1.php?id='.$_SESSION['id']);
   }
   
   
   //permet de changer le mail de l'utilisateur
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['email'])
   {
       $newmail = htmlspecialchars($POST_['newmail']);
       $insertmail = $bdd->prepare("UPDATE membres SET email = ? WHERE id = ?");
       $insertmail->execute(array($newmail, $_SESSION['id']));
       header('Location: index_1.php?id='.$_SESSION['id']);
   }
   
   
   //permet de changer le mail de l'utilisateur
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
   {
       $mdp1 = sha1($_POST['newmdp1']); 
       $mdp2 = sha1($_POST['newmdp2']); 
           if($mdp1 == $mdp2)
           {
               $insertmdp = $bdd->prepare("UPDATE membres SET pass = ? WHERE id = ?");
               $insertmdp->execute(array($mdp1, $_SESSION['id']));
               header('Location: index_1.php?id='.$_SESSION['id']);
           }
           else 
           {
               $msg = "Vos deux mdp ne correspondent pas !";
           }
      
       
   }
   
   
   //lors de l'appui sur le bouton "submit", on redirige vers la page index_1.php
   if(isset($_POST['newpseudo']) AND $_POST['newpseudo'] == $user['pseudo'])
   {
       header('Location: index_1.php?id='.$_SESSION['id']);
   }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	
	<title>Projet Webdev 2.0</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <a class="navbar-brand" href="index_1.php"><img src="assets/images/accueil.png" width="70" alt="accueil"><h5>Profil de <?php echo $user['pseudo'];?></h5></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
                                    <!-- afficher une information sur la page seulement si on est connecté-->
                                        <?php
                                        if(isset($_SESSION['id']) AND ($user['id'] == $_SESSION['id']))
                                        {
                                            ?>
                                    <li class="active"><a href="editprofil.php">Editer mon profil</a></li>
                                        <?php
                                        }
                                        ?>
                                    <li><a href="index_1.php">Accueil</a></li>
					<li><a href="about_1.php">About</a></li>
                                        <li><a href="portfolio_1.php">Articles</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Filières <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="csi.php">Filière CSI</a></li>
							<li><a href="cir.php">Filière CIR</a></li>
                                                        <li><a href="cnb.php">Filière CNB</a></li>
						</ul>
					</li>
					<li><a href="contact_1.php">Contact</a></li>
					<li><a class="btn" href="deconnexion.php">Se déconnecter</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

       
       <!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
                            <h1 class="lead"><b>Projet WEBDEV 2.0</b></h1>
                                <!--br>
				<p><a class="btn btn-default btn-lg" href="signup.php" role="button" >S'INSCRIRE</a> <a class="btn btn-action btn-lg" href="signin.php" role="button">SE CONNECTER</a></p>
			</div-->
		</div>
	</header>
	<!-- /Header -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Which code editor would you recommend?</h3>
				<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
			</div>
			<div class="col-sm-6">
				<h3>Nice header. Where do I find more images like that one?</h3>
				<p>
					Well, there are thousands of stock art galleries, but personally, 
					I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a> 
					and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Can I use it to build a site for my client?</h3>
				<p>
					Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>, 
					which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work. 
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Can you customize this template for me?</h3>
				<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
  		</div>

</div>	<!-- /container -->
<br><br>
<div class="panel panel-default">
    <div class="panel-body">
         <div class="top-margin" align="center">
        <h2>Edition de mon profil</h2>
        <form method="POST" action="">
            
            <label>Pseudo :</label>
            
            <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>"/><br/><br/>
            <label>Mail :</label>
            <input type="email" name="newmail" placeholder="Mail" value="<?php echo $user['email']; ?>"/><br/><br/>
            <label>Mot de passe :</label>
            <input type="password" name="newmdp1" placeholder="Mot de passe"/><br/><br/>
            <label>Confirmation mdp :</label>
              
            <input type="password" name="newmdp2" placeholder="Confirmation du mdp"/><br/><br/>
        
            <input type="submit" value="Mettre à jour mon profil !"/>
        
            
        </form>
        <?php
        if(isset($msg)) {echo $msg;}
        ?>
        </div>
    </div>
</div>

	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
        


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>04 94 03 89 59<br>
								<a href="mailto:marine.accart@isen.yncrea.fr">marine.accart@isen.yncrea.fr</a><br>
								
                                                                <a href="mailto:manon.wegel@isen.yncrea.fr">manon.wegel@isen.yncrea.fr</a><br>
								
                                                                <a href="mailto:marie-camille.le-morvan@isen.yncrea.fr">marie-camille.le-morvan@isen.yncrea.fr</a><br>
								<br>
								Place Georges Pompidou, 83000 TOULON
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Localisation</h3>
                                            <div class="widget-body">
                                                BREST
                                                LILLE
                                                AIX-MARSEILLE
                                                NANTES
                                                NÎMES
                                                RENNES
                                                TOULON
                                    
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

            
       
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Accueil</a> | 
								<a href="about_1.php">About</a> |
                                                                <a href="portfolio_1.php">Articles</a> |
								<a href="contact_1.php">Contact</a> |
								<b><a href="deconnexion.php">Deconnection</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2018, ACCART, LE MORVAN, WEGEL. 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		



        
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="javascript/tchatAjax.js"></script>
        
        
</body>
</html>

<?php
}
else
{
    header("Location: signin.php");
}
?>


