<?php

if(isset($_POST['mailform']))
{
$header="MIME-Version: 1.0\r\n";
$header.='From:"SUPPORT.com"<supportProject@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src="http://www.primfx.com/mailing/banniere.png"/>
			<br />
			J\'ai envoyé ce mail avec PHP !
			<br />  
			<img src="http://www.primfx.com/mailing/separation.png"/>
		</div>
	</body>
</html>
';

mail("marine.accart@isen.yncrea.fr", "CONTACT", $message, $header);
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
					<li class="active"><a href="contact.php">Contact</a></li>
					<li><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
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
			<li class="active">Contact</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contactez-nous</h1>
				</header>
				
				<p>
					Nous aimerions recevoir de vos nouvelles. Intéressé(e) à travailler ensemble? Remplissez le formulaire ci-dessous avec quelques informations sur votre projet et je reviendrai vers vous dès que possible. S'il vous plaît, laissez-moi quelques jours pour répondre.

				</p>
				<br>
					<form method="POST" role="form" action="">
						<div class="row">
                                                    
                                                    <div class="form-group">
                                                    <label class="col-sm-2" for="email">Email*</label>
							<div class="col-sm-4">
								<input name="email" id="email" class="form-control" type="email" placeholder="Email">
							</div>
                                                    
                                                    
                                                   
                                                    <label class="col-sm-2" for="objet">Objet*</label>
							<div class="col-sm-4">
								<input name="objet" id="objet" class="form-control" type="text" placeholder="Objet">
							</div>
                                                    </div>
                                                    
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea name="message" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
						
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" name="mailform" type="submit" value="Send message">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
                        
                        
                        <!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Adresse</h4>
					<address>
						Place Georges Pompidou, 83000 TOULON
					</address>
					<h4>Phone:</h4>
					<address>
						04 94 03 89 59
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->
                        
                        
                        
		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>

	<footer id="footer">

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
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>