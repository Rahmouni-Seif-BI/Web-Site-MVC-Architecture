
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
								
								<li><a href="/tryhardMVC/index.html">Home</a></li>                                                          
								
									<li><a href="loginUser.php">Sing In</a></li>

								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="/tryhardMVC/index.html">Home</a></li>
											<li><a href="login.php">Admin</a></li>
											<li><a href="loginUser.php">Sign In</a></li>
											
										</ul>										 
									</div>
								</li>								
							</ul>
						</nav>
					</header>
			
                    
				
						
				
    <div class="bg-img">
      <div class="content">
        <header>Visitor Signup</header>
        <form method="POST" action="/tryhardMVC/index.php">
			<div class="pass">
				Cin
			  </div>
			<div class="field space ">
				
				<span class="fa fa-id-card"></span>
				<input type="text" name="cin" class="pass-key"  required placeholder="cin">
			  </div>

			<div class="pass">
				Name
			  </div>
			<div class="field">
				<input type="text" name="nom"   required placeholder="name">
			  </div>
			  <div class="pass">
				Surname
			  </div>
		  <div class="field ">
            <input type="text" name="prenom" class="pass-key"  required placeholder="Surname" >
          </div>
		  
<div class="field space ">
	<span class="fa fa-city"></span>
			<SELECT name="ville"  >
                                                    
				<OPTION value="Ariana">Ariana</OPTION> 
				<OPTION value="Beja">Beja</OPTION>
				<OPTION value="Ben Arous">Ben Arous</OPTION> 	
				<OPTION value="Bizerte">Bizerte</OPTION> 
				<OPTION value="Gabes">Gabes</OPTION>
				<OPTION value="Gafsa">Gafsa</OPTION> 
				<OPTION value="Jendouba">Jendouba</OPTION>
				<OPTION value="Kairouan">Kairouan</OPTION> 	
				<OPTION value="Kasserine">Kasserine</OPTION> 
				<OPTION value="Kebili">Kébili</OPTION>
				<OPTION value="Le Kef">Le Kef</OPTION> 
				<OPTION value="Mahdia">Mahdia</OPTION>
				<OPTION value="La Manouba">La Manouba</OPTION> 	
				<OPTION value="Medenine">Médenine</OPTION> 
				<OPTION value="Monastir">Monastir</OPTION>
				<OPTION value="Nabeul">Nabeul</OPTION> 
				<OPTION value="Sfax">Sfax</OPTION>
				<OPTION value="Sidi Bouzid">Sidi Bouzid</OPTION> 	
				<OPTION value="Siliana">Siliana</OPTION> 
				<OPTION value="Sousse">Sousse</OPTION>
				<OPTION value="Tataouine">Tataouine</OPTION>
				<OPTION value="Tozeur">Tozeur</OPTION> 	
				<OPTION value="Tunis">Tunis</OPTION> 
				<OPTION value="Zaghouan">Zaghouan</OPTION>								
			  </SELECT> 
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
you have account?
          <a href="/tryhardMVC/view/inscrit/loginUser.php">Sign IN</a>
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










