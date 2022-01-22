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
								
							<li><a href="index.php?action=profil">Profil</a></li>                                                          
											<li><a href="view/inscrit/affichpan.php">Panier</a></li>  
											<li><a href="index.php?controlleur=Inscrit">OUR Products</a></li> 
											<li><a href="view/inscrit/logout.php">Log out</a></li>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
										<li><a href="index.php?action=profil">Profil</a></li>                                                          
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
							<h2>♤ Your Profil  ♤</h2>
							
						</header>
						<section class="wrapper style5">
							<div class="inner">
							<h1 align="center" ><font color="red" >Some details</font></h1>

							
</br>
</br>
</br>
<table >
<tr>
<th> cin</th> <th>  <?=  $_SESSION['cin'];   ?></th>
</tr>
<tr>
<th> nom</th> <th> <?=  $_SESSION['nom'];   ?> </th>
</tr>
<tr>
<th> prenom</th> <th> <?=  $_SESSION['prenom'];   ?> </th>
</tr>
<tr>
<th> ville</th> <th>  <?=  $_SESSION['ville'];   ?></th>
</tr>
<tr>
<th> password</th> <th>  <?=  $_SESSION['password'];   ?></th>
</tr>
</tr>


</table>
</div>
</section>
</article>						
<article id="main">
						<header>
							<h2>♤ Your profil
							 ♤</h2>
							
						</header>
				
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