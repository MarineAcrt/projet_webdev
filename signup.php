<?php
//connection à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
//Si le formulaire est rempli on entre dans la condition
if(isset($_POST['forminscrit']))
{
    //htmlspecialchars --> comprend les caractères spéciaux 
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']); 
    $email2 = htmlspecialchars($_POST['email2']); 
    //sécuriser les mots de passe en crypté
    $pass = sha1($_POST['pass']); 
    $pass2 = sha1($_POST['pass2']); 
    
    //il faut que tous les champs soient remplis
    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['pass']) AND !empty($_POST['pass2']))
    {
        //la longueur du pseudo ne doit pas dépasser 255 caractères
        $pseudolength = strlen($pseudo); 
        if($pseudolength <= 255)
        {
            
            $reqpseudo = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?"); 
            $reqpseudo->execute(array($pseudo)); 
            $pseudoexist = $reqpseudo->rowCount();
            if($pseudoexist == 0)
            {
                if($email == $email2)
                {
                    //vérifier si l'adresse mail existe
                   if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                       $reqmail = $bdd->prepare("SELECT * FROM membres WHERE email = ?"); 
                       $reqmail->execute(array($email)); 
                       $mailexist = $reqmail->rowCount();
                       if($mailexist == 0)
                       {
                           if($pass == $pass2)
                            {
                               //on déclare une longueur pour la clé
                               $longueurKey = 15; 
                               $key = "";
                               for($i = 1; $i < $longueurKey; $i++)
                               {
                                   // .= permet de rajouter la valeur à chaque fois
                                   $key.= mt_rand(0,9); //permet de générer une clé aléatoire
                               }
                                
                                
                               //Ajout d'un nouveau membre dans la base de données
                                $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, email, confirmkey, pass) VALUES(?,?,?,?)"); 
                                $insertmbr->execute(array($pseudo, $email, $key, $pass)); 
                                
                                
                                
                                //contenu du mail de confirmation
                                $header="MIME-Version: 1.0\r\n";
                                $header.='From:"SUPPORT.com"<supportProject@gmail.com>'."\n";
                                $header.='Content-Type:text/html; charset="uft-8"'."\n";
                                $header.='Content-Transfer-Encoding: 8bit';

                                $message='
                                <html>
                                        <body>
                                                <div align="center">
                                                       <a href="http://localhost/PhpProject2/confirmation.php?pseudo='.urlencode($pseudo).'&key='.$key.'">Confirmez votre compte !</a>
                                                </div>
                                        </body>
                                </html>'; //fin du mail de confirmation d'inscription
                                //envoi du mail à l'utilisateur souhaitant s'inscrire
                                mail($email, "Confirmation de compte", $message, $header);
                                
                                
                                $erreur = "Votre compte a bien été créé ! <a href=\"signin.php\">Me connecter</a>";
                            }
                            else
                            {
                                $erreur = "Vos mots de passe ne correspondent pas !";
                            }
                       }
                       else 
                       {
                           $erreur = "Adresse mail déjà utilisée !";
                       }

                    }
                   else 
                    {
                        $erreur = "Votre adresse mail n'est pas valide !";
                    }
                }
                else
                {
                    $erreur = "Vos adresses mail ne correspondent pas !";
                } 
            }
            else 
            {
                $erreur = "Pseudo déjà utilisé !";
            }
        }
        else 
        {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
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
			<li class="active">Enregistrement</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Enregistrement</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Enregistrer un nouveau compte</h3>
							<p class="text-center text-muted">Si vous avez déjà un compte, <a href="signin.php">connectez-vous</a> ici. </p>
							<hr>
                              
                                                        
                                                        
                                                        
                                                      
							<form method="post" action="">
								<div class="top-margin">
									<label for="pseudo">Pseudo*</label>
                                                                        <input name="pseudo" id="pseudo" type="text" class="form-control" value="<?php if(isset($pseudo)) {echo $pseudo;} ?>"/>
								</div>
                                                                <!--div class="top-margin">
									<label>First Name</label>
									<input name="prenom" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Last Name</label>
									<input name="nom" type="text" class="form-control">
								</div-->
								<div class="top-margin">
									<label for="email">Email <span class="text-danger">*</span></label>
									<input name="email" id="email" type="email" class="form-control" value="<?php if(isset($email)) {echo $email;} ?>"/>
								</div>
                                                                <div class="top-margin">
									<label for="email2">Votre email de confirmation<span class="text-danger">*</span></label>
									<input name="email2" id="email2" type="email2" class="form-control" value="<?php if(isset($email2)) {echo $email2;} ?>"/>
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label for="pass">Password <span class="text-danger">*</span></label>
										<input name="pass" id="pass" type="password" class="form-control">
									</div>
									<div class="col-sm-6">
										<label for="pass2">Confirm Password <span class="text-danger">*</span></label>
										<input name="pass2" id="pass2" type="password" class="form-control">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											J'ai lu <a href="page_terms.php">Termes and Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" name="forminscrit" type="submit">S'inscrire</button>
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