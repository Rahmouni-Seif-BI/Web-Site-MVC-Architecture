<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Sign up - Just Campe</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" href="favicon.png">
	</head>
	<body class="landing is-preload">
	
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
						<header id="header" class="alt">
						<h1><a href="index.html">Just Campe</a></h1>
					

						<nav id="nav">
							<ul>	
								
							<li><a href="index.php?action=profil&controlleur=Inscrit">Profil</a></li>                                                          
											<li><a href="view/inscrit/affichpan.php">Panier</a></li>  
										 
											<li><a href="index.php?controlleur=Inscrit">OUR Products</a></li> 
											<li><a href="view/inscrit/logout.php">Log out</a></li>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
										<li><a href="index.php?action=profil&controlleur=Inscrit">Profil</a></li>                                                          
											<li><a href="view/inscrit/affichpan.php">Panier</a></li>  
											<li><a href="index.php?controlleur=Inscrit">OUR Products</a></li> 
											<li><a href="view/inscrit/logout.php">Log out</a></li>
										</ul>										 
									</div>
								</li>								
							</ul>
						</nav>
					</header>
					</header>

			
				
				
					<!-- Main -->
				<article id="main">
						<header>
							<h2>Visitor Space </br> Welcome ♤ <?= /* Affichage du nom & prenom session*/
							 $_SESSION['nom'].' '.  $_SESSION['prenom']; ?> ♤</h2>
							
						</header>
						
							
					<section class="wrapper alt style2">
					<div class="inner">
					<section class="spotlight">
						
							<div class="image"><img src="images/Tente automatique.jpg" alt="" /></div><div class="content">
								<h2>Tente automatique </h2>
								<form method="POST" action="index.php?action=details&controlleur=Inscrit">
								<input type="hidden" name="id" value="1">
								<input type="submit" value="More details">
								</form>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/Lampe torche LED.jpg" alt="" /></div><div class="content">
							<h2>Lampe torche LED </h2>
							<form method="POST" action="index.php?action=details&controlleur=Inscrit">
								<input type="hidden" name="id" value="2">
								<input type="submit" value="More details">
								</form>					
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/matla.jpg" alt="" /></div><div class="content">
								<h2>Matla </h2>
								<form method="POST" action="index.php?action=details&controlleur=Inscrit">
								<input type="hidden" name="id" value="3">
								<input type="submit" value="More details">
								</form>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/couteau.jpg" alt="" /></div><div class="content">
							<h2>Couteau </h2>
							<form method="POST" action="index.php?action=details&controlleur=Inscrit">
								<input type="hidden" name="id" value="11">
								<input type="submit" value="More details">
								</form>
							</div>
						</section>
					</div>

					</section>

					
				</article>
				
			
				

				
				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://www.instagram.com/seif_rahmounii/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://www.facebook.com/seif.rahmouni.7" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="mailto:seif2000rahmouni@gmail.tn" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; 2020/2021</li><li>Design: Rahmouni Seif</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>