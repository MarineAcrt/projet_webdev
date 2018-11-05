<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                        <li class="active"><a href="portfolio.php">Articles</a></li>
                        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Filières <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="csi.php">Filière CSI</a></li>
							<li><a href="cir.php">Filière CIR</a></li>
                                                        <li><a href="cnb.php">Filière CNB</a></li>
						</ul>
					</li>
                        <li><a href="contact.php">Contact</a></li>
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
                <li><a href="index.php">Home</a></li>
                <li class="active">Articles</li>
            </ol>
            <!-- Articles Grid -->
            <section class="bg-light" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading text-uppercase">Articles</h2>
                            <h3 class="section-subheading text-muted">Différentes associations</h3>
                            <br>
                        </div>
                    </div>
                    
                            
                    
                    
                    
                    
                    <div class="row">
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/images/portfolio/caanab.jpg" width="360" height="280" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4> Canaab </h4>
                                <p class="text-muted">Isen Music</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/images/portfolio/partage.jpg" width="360" height="280" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>WiKeys</h4>
                                <p class="text-muted">Isen Partage</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/images/portfolio/gw.jpg" width="360" height="280" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Garage Week</h4>
                                <p class="text-muted">Projet n3</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/images/portfolio/bda.jpg" width="360" height="280" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>DJ contest</h4>
                                <p class="text-muted">Bureau des Arts</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/images/portfolio/ie.png" width="360" height="280" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Recrutement</h4>
                                <p class="text-muted">ISEN Engineering</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/images/portfolio/foyer.jpg" width="360" height="280" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Rénovation du foyer</h4>
                                <p class="text-muted">Isen foyer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>





        <br><br><br>
     
        <div class="navbar-collapse collapsse" style="background-color:#edcedf; font-size:18px">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li><a style="padding:40px; color:black;" href="ajoutarticle.php">Ajouter un article    |   </a></li>
                        
                        <li><a style="padding:40px; color:black" href="modifarticle.php">Modifier un article    |   </a></li>
                        
                        <li><a style="padding:40px; color:black" href="suparticle.php">Supprimer un article |</a></li>
                        
                        
                    </ul>
                </div><!--/.nav-collapse -->
                <br><br><br>
        

        <!-- ICI RAJOUTER UN FORMULAIRE AFIN DE RAJOYTER UN ARTICLE  -->




        















        <!-- Présentation associations -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Présentation des grandes associations présentes au sein de l'école</h2>
                        <h3 class="section-subheading text-muted"></h3> <br> <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/images/associations/bde.png" alt="">
                                    <!--h4 class="assoc"> BDE </h4-->
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Bureau Des Etudiants</h4>

                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">

                                            Il s'agit de l'association étudiante de référence d'un établissement d'enseignement supérieur. <br> 

                                            Plus qu'une simple association d'étudiants, il est l'interlocuteur privilégié des étudiants et l'un des piliers de la vie étudiante.<br>

                                            Il organise toutes sortes d'événements pour animer la vie de l'école et la rendre la plus conviviale possible : événements culturels, tournois sportifs, projets humanitaires ou autres (week-ends d'intégration, soirées étudiantes, sorties, voyages, rencontres avec les anciens de l'école etc.).
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">

                                    <img class="rounded-circle img-fluid" src="assets/images/associations/bds.png" alt="">
                                    <!--h4 class="assoc"> BDS </h4-->

                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Bureau Des Sports</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            Le sport, une activité qui développe chez l’étudiant la rigueur, le dépassement de soi et l’esprit d’équipe. <br>

                                            Le Bureau des sports est chargé de l'organisation d'activités sportives, il offre des facilités aux étudiants désireux de pratiquer leurs sports préférés. <br>

                                            Il organise chaque année des tournois intra ou inter-écoles dans différentes disciplines : athlétisme, volley-ball, football, tennis de table. <br>

                                            Ainsi que de grands évènements tel qu'un séjour au ski, un parcours de combattant lors du WEI, etc... <br> 


                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/images/associations/ieee.png" alt="">
                                    <!--h4 class="assoc"> Isen Engineering </h4-->

                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Isen Engineering</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">

                                            L’ISEN Engineering est une association regroupant des élèves ingénieurs de l’ISEN Toulon. <br>

                                            Forte de ses nombreux membres, elle s’affirme comme l’une des plus grandes associations de l’École. <br>

                                            Ses membres se partagent ainsi entre sa gestion et les différents projets techniques qui en font son essence. <br> 

                                            L’ISEN Engineering comporte plusieurs pôles : l’ISEN Dev, la Microsoft Imagine Cup, l'ISEN makers, le pôle robotique, l'ISEN Opensource et le pôle startup. <br>



                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/images/associations/ipp.png" alt="">
                                    <!--h4 class="assoc"> Isen Partage </h4-->

                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Isen Partage</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">

                                            L'ISEN Partage est une association caritative de l'ISEN Toulon.
                                            categories

                                        </p>
                                    </div>
                                </div>
                            </li>



                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/images/associations/iff.png" alt="">
                                    <!--h4 class="assoc"> Isen Engineering </h4-->

                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Isen Foyer</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">

                                            ISEN Foyer est l'association s'occupant des évènements s'effectuant au foyer, tel que les after-work tous les lundi à 18h. <br>
                                            Ses membres doivent également veiller à vérifier le respectd es lieux, et les rénovations possibles chaque année. <br> <br>

                                            Le foyer est un espace dédié au repos des élèves, un endroit où ils peuvent manger, jouer au babyfoot, se retrouver le soir après les cours, etc.. 
                                            <br> 

                                        </p>
                                    </div>
                                </div>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </section>










        <!-- CONTENU DE CHAQUE ARTICLE  -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">CAANAB</h2>
                                    <p class="item-intro text-muted">Ma vie d'artiste à l'ISEN</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/images/portfolio/caanab.jpg" alt="">
                                    <p> " Canaab, projet musical créé par un étudiant de l’ISEN Yncréa Méditerranée, c'est une histoire de famille et pas n'importe quelle famille. La Famille ISEN. Pour être plus précis, Canaab découle d'ISEN Music, association étudiante composée de 35 membres.<br> 

                                        Titouan Sola, élève en Master 1 Ingénieur d'affaires fait partie de cette famille. Sa passion pour la musique a pris son envol grâce à ISEN Music , son stage de 4è année se déroulera dans une start-up crée par un ancien membre de ladite association et les membres de son autre groupe The Zoo proviennent également d'ISEN Music. Et les études d’ingénieur dans tout cela ? <br>

                                        Comme beaucoup d’étudiants, les choix de cursus et idées de carrières évoluent dans le temps. Le natif varois n’échappe pas à la règle. En seconde au lycée Paul Langevin de la Seyne-sur-Mer, ce passionné d’informatique n’a pas de réelle perspective et commence à décrocher jusqu’à ce qu’il décide de son orientation. "J’ai découvert l’ISEN lorsque j’étais en 1ère S/SI et c’est la motivation d’intégrer sa prépa qui m’a remis au travail puis permis d’obtenir mon bac avec mention TB". En septembre 2014, Titouan prend sa place sur les bancs de la prépa et sort Major en Maths en première année.<br>

                                        "Le projet Canaab n'aurait pas existé sans l'ISEN" <br> <br>

                                        Même si l'ambiance de la prépa intégrée de l'ISEN est très appréciée par les élèves notamment grâce à l'entraide et l'accompagnement personnalisé, Titouan aspire à quitter ce cadre très scolaire qui lui rappelle le lycée. "En 3è année, c'est la libération, on devient un élève-ingénieur qui s'implique dans son travail puisqu'il y a un résultat final", s'enthousiame-t-il. Ce succès dont il parle intervient rapidement en 3è année avec la Garage Week. Très prisé par les étudiants, l’évènement les met en situation de projet où ils doivent proposer un concept et réaliser un prototype en cinq jours. "On travaille avec  des personnes que l'on ne connaît pas ou très peu, j'aime bien dire qu'on a souffert ensemble", se rappelle-t-il.

                                        La troisième année sera charnière pour l'étudiant de 21 ans aussi bien scolairement que personnellement. "J'ai compris que j'avais une passion forte en moi et qu'il fallait la développer, c'est là que je commence le projet Canaab avec l'envie de faire de la musique et de laisser une trace. Je me donnais deux semaines pour créer un morceau et le publier. Je voulais avoir un jalon pour savoir ce que j'avais réalisé à tel moment de ma vie", raconte celui qui joue de la musique depuis ses 13 ans. Ça c'est pour la partie musique. Car côté école aussi, les choses bougent.

                                        "Cela m'a toujours épaté cette puissance qu'on a sous le clavier" <br> <br>

                                        En janvier 2017, le président d'ISEN Music est "persuadé de choisir le Domaine Professionnel Big Data pour le Master 1 mais après avoir passé quatre mois en échange à Sherbrooke, au Québec", il décide finalement d'opter pour le DP Ingénierie d'Affaires. Déjà habitué à manager une équipe de par ses fonctions de président d'association, Titouan envisage d'aller plus loin. Il souhaite découvrir davantage l'humain, apprendre à communiquer, articuler les compétences de chacun quitte à accepter de moins toucher à la technique.

                                        Aujourd'hui, il ne regrette pas ce choix : "la technique n'est pas un problème mais trouver les bonnes solutions et savoir pourquoi on fait les choses" lui paraît fondamental. "Quand je suis arrivé à l'ISEN, je savais que je voulais m'orienter vers l'informatique. Cela m'a toujours épaté cette puissance qu'on sous le clavier, je trouve ça incroyable !".<br> <br> 

                                        Lors de son échange à Sherbrooke, contraint de laisser ses instruments en France, il en profite pour composer un maximum de morceaux qu'il enregistrera à son retour. "J'avais quand même loué une guitare accoustique sur place", précise-t-il. Titouan est un artiste et cela se remarque. Souvent la casquette vissée sur la tête, qu'il a enlevé pour la photo, il est looké comme un amateur de Rock qu'il est.

                                        Etrangement, il arbore un large sourire lorsque l'on parle de l'ISEN et laisse place à un regard profond lorsqu'il parle de musique. "La musique, c'est mon refuge, elle m'a beaucoup aidé", confie-t-il très sincèrement. "Et mon objectif, c'est d'aider les gens à travers la musique. C'est pour cela que j'ai envie de développer mon projet". <br> <br>

                                        Après avoir fait son premier concert en janvier 2018 pour l'inauguration d'un restaurant du centre-ville de Toulon, Canaab a démontré aussi ses talents de compositeur lors de la soirée des anciens élèves. Ses chansons ont été reprises par le club étudiant ISEN Orchestre. Connu dans une sphère très privée ou par des amis d'amis, la prochaine étape consiste à casser cette sphère intime. L'hébergement de ses chansons par des plateformes de musique en streaming connues tels que Deezer ou Spotify devrait permettre de donner un peu d'essor à ce futur ingénieur-artiste. 

                                        Mais au fait que signifie Canaab ? Réponse sur la page Facebook d'ISEN Méditerranée " <br> <br>

                                        Article écrit sur https://www.isen-mediterranee.fr </p>

                                    <ul class="list-inline">
                                        <li>Date: June 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: IsenMusic</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">WiKeys : l'aventure des clés du savoir continue</h2>
                                    <p class="item-intro text-muted">L'association Kiwanis fait un don de 1 600€ pour soutenir le projet d'ISEN Partage</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/images/portfolio/partage.jpg" alt="">
                                    <p>" L'idée est simple au départ. Et pourtant elle a déjà ravi de nombreux jeunes en Afrique qui n'ont pas accès à la connaissance. Et si on transférait le contenu de Wikipédia sur une clé USB et qu'on l'installait ensuite sur un ordinateur sans connexion internet ? C'est ce qu'a tenté et réussi WiKeys, projet de l'association étudiante ISEN Partage. <br> <br> 
                                        L'ISEN encourage les élèves à devenir de futurs ingénieurs humanistes au travers d'un stage associatif en 1ère année et d'une implication en association tout au long de leur cursus. Cette pédagogie laisse entrevoir de belles réussites comme WiKeys. "C'est une première expérience qui m'a aidé à mener un projet en équipe", analyse Domitille Pianelli, responsable de WiKeys. "Cela nous donne une idée de nos futures responsabilités en entreprise".   <br> <br>
                                        Grâce à ces projets associatifs étudiants, 100 clés ont déjà été distribuées à des enseignants et étudiants en Afrique depuis mai 2016. Avec ce don de 1 600€ de Kiwanis (club Toulon Iles d'Or), association internationale humanitaire, 100 nouvelles unités vont pouvoir être envoyées cette année. Venus ce mardi dans les locaux du campus de Toulon (photo ci-dessus) pour remettre le chèque de soutien, les membres de Kiwanis saluent le sérieux du projet. <br> <br>

                                        <br> 
                                        WiKeys : un projet purement associatif qui réunit  ISEN Partage, Kiwanis et Solaire Sans Frontières
                                        <br> <br> <br> 

                                        "On achète des clés puis on installe le logiciel Wikipédia dessus, détaille Guillaume Perrocheau, enseignant ISEN référent du projet. Ensuite, elles sont données aux techniciens de Solaire Sans Frontières (SSF) qui les distribuent directement sur le terrain". Chargés d'installer des panneaux solaires qui amènent l'électricité dans des villages du Niger ou de Magadascar, les techniciens SSF sont un relais précieux pour ISEN Partage. <br> <br>
                                        Un ordinateur sans accès internet a peu d'intérêt. Mais la facilité d'utilisation de WiKeys permet d'obtenir une encyclopédie universelle en moins de dix minutes. Une vraie innovation dans des pays où l'accès à la connaissance est primordiale pour le développement. <br> <br>

                                        <br>
                                        Les clés Wikeys peuvent servir maintes et maintes fois. On peut les imaginer voyager de village en village cultivant les populations après leur passage
                                        <br> <br> <br> 

                                        "Le projet correspond totalement aux actions que nous menons pour servir les enfants du monde",  se réjouit Alain Gabriel-Sabatier, secrétaire de Kiwanis Toulon Iles d'Or. Voir des jeunes si motivés qui ont beaucoup de ressort et d'idées nous a donné envie de les soutenir". <br> <br>
                                        "Nous sommes fières de constater que le projet prend forme. WiKeys a nécessité beaucoup de travail mais on se démène pour un but précis", s'enthousiasme Domitille Pianelli. C'est une première réussite d'avoir pu récolter une telle somme." L'étudiante de troisième année d'ingénieur à l'ISEN prévient que les membres de l'association ne comptent pas s'arrêter là. L'Amérique latine serait déjà intéressée par l'envoi des ces précieux sésames du savoir. Mais pour celà, il faut créer de nouvelles actions pour séduire de nouveaux mécènes. <br> <br>

                                        <br>
                                        Article écrit sur https://www.isen-mediterranee.fr </p>
                                    <br>

                                    <--/p!-->
                                    <ul class="list-inline">
                                        <li>Date: June 2017</li>
                                        <li>Category: Isen Partage</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">Garage Week</h2>
                                    <p class="item-intro text-muted">l'ISEN est dans le pré</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/images/portfolio/gw.jpg" alt="">
                                    <p> 

                                        " La troisième édition de la GarageWeek a débuté cette semaine sur le campus de Toulon. <br> <br>
                                        Les élèves de 3è année disposent de huit jours pour proposer un concept et un prototype répondant à une problématique du secteur agricole. Un domaine où le numérique occupe une place de plus en plus centrale. <br> <br>

                                        Rebaptisée "l’ISEN est dans le pré", la GarageWeek permet aux étudiants de mêler leurs différentes compétences (créativité, gestion de projet, communication, électronique, prototypage rapide…) pour obtenir un résultat concret. "L’agriculture c’est de plus en plus technologique, c’est pour cela qu’on a besoin de vous", a déclaré Eric Altéro, directeur général de la Chambre d’agriculture du Var et sponsor cette année. Il leur a demandé de réfléchir aux divers besoins de la filière comme notamment la gestion de la température du raisin pour une meilleure production viticole ou l’automatisation des contrôles qualité.
                                        <br> <br> <br>
                                        Des idées originales et réalisables au service de la filière agricole
                                        <br> <br> <br>
                                        Répartis en 19 groupes de cinq, les étudiants ISEN en 3è année parcours commun ingénieur sont immergés dans une dynamique de projet. Pour la première fois, ils ont une idée concrète de la pratique de leur futur métier. Pendant une semaine, place aux idées les plus originales dès lors qu’elles soient réalisables. Très motivés par cette nouvelle dynamique de travail, les futurs ingénieurs ont bien compris les enjeux.
                                        <br> <br>
                                        Ainsi, la création d’un label "chicken run" permettant d’identifier les poules qui ont vraiment couru en plein air a séduit Eric Altéro du fait de son caractère novateur. Éleveurs et consommateurs pourront connaître la distance parcourue par l’animal doté d'une puce connectée. D’autres ont pensé à une bouteille de vin intégrant des capteurs qui relèveraient une multitude d’informations permettant d’évaluer les conditions de transport des caisses (état de stockage, temps d’exposition à la lumière, température…). Sans oublier l’idée d’un détecteur de stress placé sur les troupeaux de brebis qui alerterait l’éleveur en cas d’attaque extérieure et réduirait ainsi les délais d’intervention.
                                        "  <br> <br>
                                        <br>
                                        Article écrit sur https://www.isen-mediterranee.fr </p>
                                    <br>

                                    </p>
                                    <ul class="list-inline">
                                        <li>Date: June 2017</li>
                                        <li>Category: Projets N3</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase"> DJ contest</h2>
                                    <p class="item-intro text-muted">Qui gagnera le grand prix ?</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/images/portfolio/bda.jpg" alt="">
                                    <p>

                                        Le 7 décembre 2017, le Bureau des Arts de l'isen toulon a organisé une soirée nommée le "dj contest". <br> <br>

                                        Cette soirée consistait à mettre en compétition de jeunes étudiants débutant en tant que DJ. <br> <br>

                                        Cela a donc permis aux étudiants de découvrir de nouveau styles musicaux, de passer un bon moment entre amis, mais également de découvrir de nouveaux talents. <br> <br>
                                        <br>
                                        Suite à un vote, les résultats furent publiés sur la page Facebook "BDA ISEN Toulon" : 
                                        <br> <br>
                                        "Finalement David Haioum arrive à la première place avec 28 voix suivi de près par Paul Longan-h à la 2 ème place avec 24 voix !
                                        <br>
                                        On remercie aussi Martin Cortopassi qui finit 3 ème et Nicolas Calatayud 4 ème.
                                        <br>
                                        Bravo à tous et à bientôt pour de nouvelles soirées !!!"
                                        <br> <br>
                                    </p>
                                    <ul class="list-inline">
                                        <li>Date: June 2017</li>
                                        <li>Category: BDA isen toulon</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 5 -->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">Recrutement pour l'ISEN Engineering</h2>
                                    <p class="item-intro text-muted">  </p>
                                    <img class="img-fluid d-block mx-auto" src="assets/images/portfolio/ie.png" alt="">
                                    <p>
                                        <br> <br>
                                        " Bonjour à tous !
                                        <br> <br> <br>
                                        Comme vous le savez, la fin d'année approche à grand pas, et l'ISEN Engineering a déclaré le recrutement ouvert ! <br>
                                        Tu es passionné par l'électronique ? l'informatique ? Tu veux apprendre en t'amusant ?<br>
                                        Tu es toujours à la recherche d'un poste pour l'année prochaine en vue de valider ta PI ou ta PR ?<br>
                                        L'IE est fait pour toi !
                                        <br> <br>

                                        ============ Les postes à pourvoir ============ <br> <br>
                                        - Imagine Cup (Concours informatique de Microsoft)<br>
                                        - Isen Dev (Minis projets informatiques)<br>
                                        - Pôle Robotique (AI2R et NI RIO)<br>
                                        - Solar Car Solutions <br>
                                        - Isen Startup <br>
                                        - Responsable Logistique <br>
                                        - Responsable Communication <br>
                                        <br> <br>

                                        Ce sera de plus une occasion de travailler en équipe dans la joie et la bonne humeur sans aucune pression !<br>
                                        Pour toute question, n'hésite pas à nous contacter, ou à venir au 5ème prendre un café à l'IE ! ☕😋 <br>
                                        Si tu es motivé, merci d'envoyer ta candidature à l'adresse guillaume.desrumaux@isen.yncrea.fr.<br>
                                        <br> <br>

                                        A bientôt parmi nous 😉
                                        <br> <br>

                                        Cordialement,
                                        <br> <br>

                                        Laura Jubert "
                                        <br> <br> <br>
                                        Publication postée sur la page facebook "ISEN Engineering", écrite par Laura Jubert. 
                                        <br>
                                    </p>
                                    <ul class="list-inline">
                                        <li>Date: June 2017</li>
                                        <li>Category: IE </li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 6 -->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2 class="text-uppercase">Rénovation du foyer</h2>
                                    <p class="item-intro text-muted">Un nouvel espace de repos pour les élèves</p>
                                    <!--img class="img-fluid d-block mx-auto" src="assets/images/portfolio/06-full.jpg" alt=""-->
                                    <div class="row widget">
                                        <object type="application/x-shockwave-flash" width="425" height="355" data="https://www.facebook.com/ISENFoyer/videos/2085435985008316/
                                                ">
                                            <param name="movie" value="https://www.facebook.com/ISENFoyer/videos/2085435985008316/
                                                   " />
                                            <param name="wmode" value="transparent" />
                                        </object>
                                    </div>
                                    <p>

                                        " Nous venons de terminer une rude période : neige, froid, partiels... fin bref autant de raisons pour vous de ne pas venir nous rendre visite (Vous nous manquez un peu au passage...)[petite larme à l’œil 😢]
                                        <br> <br>
                                        Et si je vous dis que nous avons fait peau neuve? L’équipe du foyer est fière de vous annoncer de grands changements... <br>
                                        bon ok j’arrête de faire durer le suspens, trop excité de vous faire découvrir les nouveautés !😍
                                        <br> <br>

                                        Vous vous rappelez du sondage effectué en ce début d’année 2018? Et bien ça y est ! <br>
                                        ⚠️Le projet a enfin été réalisé !!!!!!! ⚠️<br>
                                        [Et là vous avez le sourire aux lèvres et vous applaudissez 😁👏🏻]
                                        <br> <br>

                                        Vous avez déjà pu entendre la nouvelle sono dans la pièce et nous venons d’y ajouter un mobilier tout neuf!
                                        <br> <br>

                                        On vous laisse apprécier la nouveauté et SURTOUT n’hésitez pas à y faire un petit tour et nous donner vos impressions ! 📝(Bonnes ou mauvaises... mais surtout bonnes en fait 😆) <br>
                                        On espère également que vous saurez nous rendre la pareille et venir profiter du foyer dès le prochain afterwork lorsque la campagne will be over! 🍻 <br>
                                        D’ailleurs, big up aux deux listes ... et puisse le sort vous être favorable ! 😘
                                        <br> <br>


                                        PS : Nous avons donné beaucoup dans cette rénovation, il est donc inutile de vous demander, le plus humblement possible, de respecter le matériel 😇  " 
                                        <br> <br>

                                        Retrouvez cet article sur la page facebook ISEN foyer ! 

                                    </p>
                                    <ul class="list-inline">
                                        <li>Date: January 2017</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!--PAGE MODIFIEE PAR MANON WEGEL -->








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
                                    Copyright &copy; 2018, ACCART, LEMORVAN, WEGEL. 
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

    </body>


</html>
