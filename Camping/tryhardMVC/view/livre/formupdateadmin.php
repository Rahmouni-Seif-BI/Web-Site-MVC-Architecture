
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
							<li><a href="index.php?action=alladmin">TeamMate's (Admins)</a></li>  
							<li><a href="index.php?action=user">Users</a></li>                                                          
								<li><a href="index.php?action=order">Orders</a></li>  
								<li><a href="index.php?action=all">Products</a></li> 
								<li><a href="view/livre/logout.php">Logout</a></li>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
										<li><a href="index.php?action=user">Users</a></li>                                                          
											<li><a href="index.php?action=order">Orders</a></li>  
											<li><a href="index.php?action=all">Products</a></li> 
											<li><a href="view/livre/logout.php">Logout</a></li>
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
							JUST  Update
						</header>
						<section class="wrapper style5">
							<div class="inner">
							
    <form method="POST" action="index.php?action=updateadmin">



	<table >
            <?php
if (isset($_GET['id']))
$var=$_GET['id'];
else 
$var=0
?>
<?php 

require_once __DIR__ .'/../../model/livre.php' ; 
$livre =new Livre(); 
$livres=$livre->all(); 

    foreach ($livres  as $v ) 
    {
    ?>
       
           <input type="hidden" value="<?= $var; ?>" name="id">
       
        <tr>
            <td>nom</td> <td><input type="text" name="nom" value="<?php echo $v->get('nom')?>"></td>
        </tr>
        <tr>
            <td>prenom</td> <td><input type="text" name="prenom" value="<?php echo $v->get('prenom')?>" ></td>
        </tr>
        <tr>
            <td>email</td> <td><input type="text" name="email" value="<?php echo $v->get('email')?>"></td>
        </tr>
        <tr>
            <td>login</td> <td><input type="text" name="login" value="<?php echo $v->get('login')?>"></td>
        </tr>
        <tr>
            <td>password</td> <td><input type="text" name="password" value="<?php echo $v->get('password')?>"></td>
        </tr>
        <tr>
        <td><input type="submit" value="Modifier"></td>    <td><input type="reset" value="Annuler"></td>
        </tr>

    </table>
								</div>
						</section>
					</article>
    </form>
	    
    <?php   
    }
    
    ?>
</body>
</html>
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