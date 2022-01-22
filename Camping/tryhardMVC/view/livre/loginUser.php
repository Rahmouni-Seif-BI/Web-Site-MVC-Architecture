<?php 
session_start(); 
if(isset($_POST['login'],$_POST['password']))
{

    // verification login  & password 
   require_once __DIR__ ."/../../model/data-base.php"; 
   

    $req = "select nom,prenom from admin where login=:login and password=:password"; 
    $tab=array('login'=>$_POST['login'], 'password'=>$_POST['password']); 
   
    $admin=database::find($req,$tab); 

    if($admin )     
    {
      
        $_SESSION['nom'] = $admin['nom'];   
        $_SESSION['prenom'] = $admin['prenom']; 
       header('location:/../tryhardMVC/index.php');
    }
    
}



?>
<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<title>Sign up - Just Campe</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/png" href="favicon.png">
		<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
						<header id="header" class="alt">
						<h1><a href="index.html">Just Campe</a></h1>
					

						<nav id="nav">
							<ul>	
								
								<li><a href="index.html">Home</a></li>                                                          
								
									<li><a href="inscrit.php">SingUp</a></li>

								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="login.php">Admin</a></li>
											<li><a href="inscrit.php">Sign up</a></li>
											
										</ul>										 
									</div>
								</li>								
							</ul>
						</nav>
					</header>
					</header>
                    
				
						
				
    <div class="bg-img">
      <div class="content">
        <header>Visitor Login Form</header>
        <form method="POST" action="">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="login" required placeholder="Email or Phone">
          </div>
<div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" name="password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
<div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
<div class="field">
            <input type="submit" value="LOGIN">
          </div>
          <div class="signup">
Don't have account?
          <a href="inscrit.php">Signup Now</a>
        </div>
</form>



</div>
</div>
<script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
 

				
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





