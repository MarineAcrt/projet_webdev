<?php
//connection à la session de l'utilisateur
session_start();
//connection à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8', 'root', '');
if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?"); 
    $requser->execute(array($getid)); 
    $userinfo = $requser->fetch();
}
    if(isset($_SESSION['id']))
{
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?"); 
   $requser->execute(array($_SESSION['id']));
   $userinfo = $requser->fetch();
   
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
                                <a class="navbar-brand" href="index_1.php"><img src="assets/images/accueil.png" width="70" alt="accueil"><h5>Profil de <?php echo $userinfo['pseudo'];?></h5></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
                                    <!-- afficher une information sur la page seulement si on est connecté-->
                                        <?php
                                        if(isset($_SESSION['id']) AND ($userinfo['id'] == $_SESSION['id']))
                                        {
                                            ?>
                                    <li><a href="editprofil.php">Editer mon profil</a></li>
                                        <?php
                                        }
                                        ?>
					<li class="active"><a href="#">Accueil</a></li>
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
                            <h1 class="lead"><b>ISEN Social News</b></h1>
                            <p class="text-muted">
                            <h4>Le meilleur réseau social et site d'informations de l'ISEN</h4><br></p>
		</div>
                </div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Inscrivez-vous vite pour découvrir plus de fonctionnalités</h2>
		<p class="text-muted">
                    Notre équipe de développement reste à votre disposition pour toute question, <br>
                    il vous suffit de nous contacter par mail sur la page "contact".
		</p>
	</div>
	<!-- /Intro-->
		
     <div class="jumbotron top-space">
        <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Notre équipe</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="assets/images/marine-min.jpg" alt="">
              <h4>ACCART Marine</h4>
              <p class="text-muted">Chef Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/marineaccart.06">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="assets/images/mc.jpg" alt="">
              <h4>LE MORVAN Marie-Camille</h4>
              <p class="text-muted">Chef Marketing</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/mariecamille.lemorvan">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="assets/images/manon.jpg" alt="">
              <h4>WEGEL Manon</h4>
              <p class="text-muted">Chef Développeur</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/manon.wegel">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </section>
     </div>
        <br><br>
        
        
        
    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets/images/logos/isen.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
                <img class="img-fluid d-block mx-auto" src="assets/images/logos/digital.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets/images/logos/junior.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets/images/logos/tvt.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
        
        
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Pourquoi utiliser ce site plutôt qu'un autre ?</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Bootstrap-powered</h4></div>
					<div class="h-body text-center">
						<p>Lorem irit?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Rapidité de réponse</h4></div>
					<div class="h-body text-center">
						<p>Grâce à un service de contact réalisé par notre chef développeur, et une connection constante au service de support, vous aurez la chance d'obtenir une réponse dans les 3 heures.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Articles créatifs</h4></div>
					<div class="h-body text-center">
						<p>Chaque trimestre, nous mettons à jour les articles du site. Vous y trouverez les associations et leur vie dans l'école, ainsi que les différents projets réalisés tout au long de l'année.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Des internautes satisfaits</h4></div>
					<div class="h-body text-center">
						<p>Plus de 87% de nos internautes satisfaits par les services que nous proposons. </p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

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

  
							
            <!-- les messages du tchat -->
            <div class="col-md-6 widget">
			<h3 class="widget-title">Minichat</h3>
			<div class="widget-body">
		

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
						</div>
                                                </div>
                                                            
						</div>
					</div>

				</div> <!-- /row of widgets -->
		

            
            
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

?>


