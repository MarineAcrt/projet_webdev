<?php
//Demarrer une session
session_start();

//se connecter à la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
//si formulaire de connection bien rempli, on entre dans la condition
if(isset($_POST['formconnect']))
{
    $userconnect = htmlspecialchars($_POST['userconnect']); 
    $passconnect = sha1($_POST['passconnect']);
    //si les champs de user et de mot de passe ne sont pas vides on entre dans la condition
    if(!empty($userconnect) AND !empty($passconnect))
    {
        //on sélectionne les données correspondantes dans la base de données
        $requser = $bdd->prepare("SELECT * FROM membres WHERE email = ? AND pass = ?"); 
        $requser->execute(array($userconnect, $passconnect)); 
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id']; 
            $_SESSION['pseudo'] = $userinfo['pseudo']; 
            $_SESSION['email'] = $userinfo['email']; 
            //On se redirige vers la page index_1.php
            header('Location:index_1.php?id='.$_SESSION['id']);
        }
        else 
        {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    }
    else 
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
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

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/accueil.png" width="70" alt="accueil"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="about.php">About</a></li>
                                        <li><a href="portfolio.php">Articles</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Filières <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="csi.php">Filière CSI</a></li>
							<li><a href="cir.php">Filière CIR</a></li>
                                                        <li><a href="cnb.php">Filière CNB</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
					<li class="active"><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Accueil</a></li>
			<li class="active">Connexion</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Se connecter</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Connectez-vous à votre compte</h3>
							<p class="text-center text-muted">Si vous n'avez pas de compte, <a href="signup.php">enregistrez-vous</a> ici. </p>
							<hr>
							
							<form method="post" action="">
								<div class="top-margin">
									<label for="userconnect">Username/Email <span class="text-danger">*</span></label>
                                                                        <input name="userconnect" id="userconnect" type="email" placeholder="Email" class="form-control">
								</div>
								<div class="top-margin">
									<label for="passconnect">Password <span class="text-danger">*</span></label>
                                                                        <input name="passconnect" id="passconnect" type="password" placeholder="Mot de passe" class="form-control">
								</div>

                                                            <hr>

								<div class="row">
									<div class="col-lg-8">
										<b><a href="">Mot de passe oublié ?</a></b>
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" name="formconnect" type="submit">Se Connecter</button>
									</div>
								</div>
							</form>
                                                        <?php
                                                        if(isset($erreur))
                                                        {
                                                            echo '<font color="red">'.$erreur.'</font>';
                                                        }
                                                        ?>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

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
							<p class="follow-me-icons clearfix">
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
                                                <br>LILLE
                                                <br>AIX-MARSEILLE
                                                <br>NANTES
                                                <br>NÎMES
                                                <br>RENNES
                                                <br>TOULON
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
								<a href="about.php">About</a> |
                                                                <a href="portfolio.php">Articles</a> |
								<a href="contact.php">Contact</a> |
								<b><a href="signup.php">Sign up</a></b>
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
		
        


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="javascript/tchatAjax.js"></script>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>

