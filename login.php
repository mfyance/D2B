<!doctype html>
<html lang="en">
<head>
	<?php include 'privado/includes/seo.php' ;?>	
	<link rel="stylesheet" href="privado/css/jquery.bxslider.css">
	<link rel="stylesheet" href="privado/css/fancybox.css">
	<!-- Login - Forget password  - Restaure password - return -->
	<link rel="stylesheet" href="privado/css/popup.css">
	<title>Login - D2B</title>
</head>
<body>
	<div id="login" class="estructura nologged">
		<section id="cuerpo" class="cleaner">
			<div class="cleaner">
				<form action="" id="frm-login" class="main cleaner">
					<div class="titulo cleaner">
						<h2>welcome</h2>
					</div>
					<div class="row cleaner">
						<label for="mail">E-mail:</label>
						<input class="style3" type="text" name="mail" id="mail">
						<i id="mail-ico" class="myicon-email"></i>
					</div>
					<div class="row cleaner">
						<label for="pass">Password:</label>
						<input class="style3" type="password" name="pass" id="pass">
					</div>
					<div class="row cleaner remenberme">
						<div class="cleaner">
							<input type="checkbox" name="remenberme" id="remenberme" value="2" class="check">
							<label for="remenberme"></label>
							<span>Remember me</span>
						</div>
						<div class="cleaner">
							<input type="checkbox" name="forgot" id="forgot" value="1" class="check">
							<label for="forgot"></label>
							<span>Forgot your password?</span>
						</div>
					</div>
					<div class="row cleaner">
						<button class="but-type2" type="submit"><i class="myicon-delete"></i>sign up</button>
					</div>
					<div class="gotoregister cleaner row">
						<div class="cleaner">
							<p>Still do not have an account?</p>
						</div>
						<div class="cleaner">
							<a href="register.php" target="_parent">
								<button type="button" class="but-type3">register</button>
							</a>
						</div>
					</div>				
				</form>
			</div>
			<div class="cleaner" id="showformrecover">
				<a href="#frm-recover" id="hidescroll">go to hear</a>
				<form action="" id="frm-recover" class="main cleaner">	
					<p>Enter the e-mail address you used to create your <em>D2B account</em>, we will locate your account information and send you an e-mail with a link to reset your password.</p>	
					<div class="row cleaner">
						<label for="mail">E-mail:</label>
						<input class="style3" type="text" name="mail" id="mail">
						<i id="mail-ico" class="myicon-email"></i>
					</div>				
					
					<div class="cleaner">
						<button class="but-type4" type="submit">Recover password</button>
					</div>					
				</form>	
			</div>	
		</section>
	</div>
	<script src="privado/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<!--  Validate form  -->
	<script src="privado/js/jquery.validate.js"></script>
	<!-- Placeholder -->
	<script src="privado/js/placeholder.js"></script>
	<!--  My apps  -->
	<script src="privado/js/app.js"></script>
	<script src="privado/js/app.login.js"></script>
</body>
</html>
