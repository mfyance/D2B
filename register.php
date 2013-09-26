<!doctype html>
<html lang="en">
<head>
	<?php include 'privado/includes/seo.php' ;?>	
	<link rel="stylesheet" href="privado/css/jquery.bxslider.css">
	<link rel="stylesheet" href="privado/css/fancybox.css">
	<link rel="stylesheet" href="privado/css/register.css">
	<link rel="stylesheet" href="privado/css/tagit.css">
	<title>Register - D2B</title>
</head>
<body>
	<div id="register" class="estructura nologged">
		<?php include 'privado/includes/header-home.php' ;?>
		<section id="cuerpo" class="cleaner">
			<article class="main cleaner">
				<h2>Be part of D2B</h2>
				<div class="helper cleaner">
					<p><i class="myicon-helper"></i>Choose one of these options which fits more to what you want</p>
				</div>
				<div id="acordeon" class="cleaner">
					<dl>
						<!-- [1.1] Designer -->
						<dt class="cleaner">
							<div class="titu cleaner">
								<h3><i class="myicon-reg-designer"></i>im a designer</h3>
							</div>
							<div class="content cleaner">
								<span>Use this option if your interest in sale your products </span>
								<i class="myicon-reg-arrow"></i>
							</div>
						</dt>
						<!-- [1.2]Designer Content -->
						<dd>
							<div id="reg-designer" class="myform-style1 cleaner reg">								
								<form id="frm-reg-designer" action="" class="cleaner" >																	
									<div class="cleaner" id="myset-content">
										<!-- Only Inputs -->
										<div id="onlyinputs" class="put-padding cleaner">
											<fieldset class="cleaner">(*) these fields are important and mandatory</fieldset>	
											<div class="myrow cleaner color-style2">
												<div class="cleaner">
													<label for="username">(*) Username:</label>
													<input type="text" class="style2" name="username" id="username" placeholder="username">
													<span id="clone">Hello, <em class="usernameclone designer"></em> welcome!</span>
												</div>
												<div class="cleaner thetooltip">
													<label for="password">(*) Password:</label>
													<div class="cleaner thistooltip">
														<i class="myicon-helper"></i>
														<div class="mytooltip3 cleaner">
															<div class="cleaner">
																<p>rate this designer</p>
															</div>
														</div>
													</div>
													<input type="password" class="style2" name="password" id="password" placeholder="password">													
												</div>
												<div class="cleaner">
													<label for="repassword">(*) Confirm password:</label>
													<input type="password" class="style2" name="repassword" id="repassword" placeholder="repassword">
												</div>
											</div>
											<div class="myrow cleaner color-style2">
												<div class="cleaner">
													<label for="brand">(*) Brand / Company Name:</label>
													<input type="text" class="style2" name="brand" id="brand" placeholder="brand - company name">
												</div>
												<div class="cleaner">
													<label for="name">(*) Name:</i></label>
													<input type="text" class="style2" name="name" id="name" placeholder="name">
												</div>
												<div class="cleaner">
													<label for="lastname">(*) Last Name:</label>
													<input type="text" class="style2" name="lastname" id="lastname" placeholder="lastname">
												</div>
											</div>
											<div class="myrow cleaner color-style2">
												<div class="cleaner">
													<label for="companyemail">(*) Company E-mail:</label>
													<input type="text" class="style2" name="companyemail" id="companyemail" placeholder="company email">
												</div>
												<div class="cleaner">
													<label for="personalemail">(*) Personal E-mail:</label>
													<input type="text" class="style2" name="personalemail" id="personalemail" placeholder="personal email">
												</div>
												<div class="cleaner thetooltip">
													<label for="safetypay">(*) Safety pay account number:</label>
													<div class="cleaner thistooltip">
														<i class="myicon-helper"></i>
														<div class="mytooltip3 cleaner">
															<div class="cleaner">
																<p>rate this designer</p>
															</div>
														</div>
													</div>
													<input type="text" class="style2" name="safetypay" id="safetypay" placeholder="safety pay account number">													
												</div>
											</div>
											<div class="myrow color-style2 cleaner">
												<div class="cleaner">
													<label for="telephono">Telephone:</label>
													<input type="text" class="style2" name="telephono" id="telephono" placeholder="telephono">
												</div>
												<div class="cleaner">
													<label for="mobile">Mobile:</label>
													<input type="text" class="style2" name="mobile" id="mobile" placeholder="mobile">
												</div>									
											</div>
											<div class="myrow color-style2 cleaner">
												<div class="cleaner nopadding">
													<label for="country">(*) Country:</label>
													<select name="country" id="country" class="selectpicker">
													    <option>Peru</option>
													    <option>Italia</option>
													    <option>USA</option>
												  	</select>
												</div>
												<div class="cleaner nopadding">
													<label for="city">(*) City:</i></label>
													<select name="city" id="city" class="selectpicker">
													    <option>New York</option>
													    <option>New yersey</option>
													    <option>Boston</option>
												  	</select>
												</div>
												<div class="cleaner">
													<label for="zipcode">(*) Zip code:</label>
													<input type="text" class="style1" name="zipcode" id="zipcode" placeholder="zip code">
												</div>
											</div>
											<div class="myrow color-style2 cleaner">
												<label for="address">Your address:</label>
												<input type="text" class="style1" name="address" id="address" placeholder="address">
											</div>
											<div class="myrow multiselect cleaner color-style2">
												<label for="tags4search2">Tags for search:</label>
												<ul name="tags4search2" id="tags4search2" class="tags4search"></ul>
											</div>
										</div>
										<!-- Alert -->
										<div id="privacy" class="cleaner onlyregister" >
											<h3><i class="myicon-privacy"></i>some terms and conditions</h3>
											<h6>When an unknown printer took a galley of type and scrambled it to make a type </h6>
											<div class="cleaner">
												<div class="row cleaner">
													<ul class="mylist-1 cleaner">
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
													</ul>
												</div>
												<div class="cleaner otherbuts">
													<div class="cleaner">
														<a href="termsconditions.php" ><button type="button" class="but-type5">view all terms and condition</button></a>
													</div>
													<div class="cleaner">
														<div class="cleaner row">
															<div class="cleaner">
																<input type="checkbox" name="privacy2" id="privacy2" value="1" class="check" checked/>
																<label for="privacy2"></label>												
															</div>
															<div class="cleaner okterms"><p>I accept the terms and conditions</p></div>
														</div>	
													</div>
												</div>										
											</div>
										</div>
										<!-- But Update - Load - save- -->
										<div class="myrow but cleaner">
											<button class="butregister" type="submit"><i class="myicon-reg-register animated"></i>register my account</button>
											<div class="success cleaner animated"><p>this section has been updated successfully. <i class="myicon-done "></i></p></div>
										</div>
									</div>
								</form>
							</div>
						</dd>

						<!-- [2.1] Wholesaler -->
						<dt class="cleaner">
							<div class="titu cleaner">
								<h3><i class="myicon-reg-wholesaler"></i>im a wholesale buyer</h3>
							</div>
							<div class="content cleaner">
								<span>Use this option if your interest in sale your products </span>
								<i class="myicon-reg-arrow"></i>
							</div>
						</dt>
						<!-- [2.2] Wholesaler Content -->
						<dd>							
							<div id="reg-wholesaler" class="myform-style1 cleaner reg">								
								<form id="frm-reg-wholesaler" action="" class="cleaner" >																	
									<div class="cleaner" id="myset-content">
										<!-- Only Inputs -->
										<div id="onlyinputs" class="put-padding cleaner">
											<fieldset class="cleaner">(*) these fields are important and mandatory</fieldset>	
											<div class="myrow cleaner color-style2">
												<div class="cleaner">
													<label for="username">(*) Username:</label>
													<input type="text" class="style2" name="username" id="username" placeholder="username">
													<span id="clone">Hello, <em class="usernameclone wholesaler"></em> welcome!</span>
												</div>
												<div class="cleaner thetooltip">
													<label for="password">(*) Password:</label>
													<div class="cleaner thistooltip">
														<i class="myicon-helper"></i>
														<div class="mytooltip3 cleaner">
															<div class="cleaner">
																<p>rate this designer</p>
															</div>
														</div>
													</div>
													<input type="password" class="style2" name="password" id="password" placeholder="password">													
												</div>
												<div class="cleaner">
													<label for="repassword">(*) Confirm password:</label>
													<input type="password" class="style2" name="repassword" id="repassword" placeholder="repassword">
												</div>
											</div>
											<div class="myrow cleaner color-style2">
												<div class="cleaner">
													<label for="brand">(*) Brand / Company Name:</label>
													<input type="text" class="style2" name="brand" id="brand" placeholder="brand - company name">
												</div>
												<div class="cleaner">
													<label for="name">(*) Company Name:</i></label>
													<input type="text" class="style2" name="name" id="name" placeholder="name">
												</div>
												<div class="cleaner">
													<label for="lastname">(*) Last Name:</label>
													<input type="text" class="style2" name="lastname" id="lastname" placeholder="lastname">
												</div>
											</div>
											<div class="myrow cleaner color-style2">
												<div class="cleaner">
													<label for="companyemail">(*) Company E-mail:</label>
													<input type="text" class="style2" name="companyemail" id="companyemail" placeholder="company email">
												</div>
												<div class="cleaner">
													<label for="personalemail">(*) Company E-mail:</label>
													<input type="text" class="style2" name="personalemail" id="personalemail" placeholder="personal email">
												</div>
												<div class="cleaner">
													<label for="telephono">Telephone number:</label>
													<input type="text" class="style2" name="telephono" id="telephono" placeholder="telephono">
												</div>
											</div>
											
											<!-- Accounts Here -->
											<div id="personajes" class="cleaner row">
												<!-- Add new account -->
												<div class="myrow addaccount cleaner">
													<div class="cleaner">
														<a href="#" id="addButton">
															<i class="myicon-reg-addaccount"></i><span>Add another acount.</span>
														</a>
													</div>																			
												</div>												
												<!-- Account n#1 -->
												<!-- <div id="personaje-1" class="myrow color-style2 cleaner myopacity">													
													<div class="cleaner">
														<label for="namepersoninchange_1">(*) Name of person in change:</label>
														<input type="text" class="style2" name="namepersoninchange_1" id="namepersoninchange_1" placeholder="name of person in change">
													</div>
													<div class="cleaner">
														<label for="changeincompany_1">(*) Change in company:</label>
														<input type="text" class="style2" name="changeincompany_1" id="changeincompany_1" placeholder="change in company">
													</div>
													<div class="cleaner">
														<label for="emailpersoninchange_1">(*) E-mail of person in change:</label>
														<input type="text" class="style2" name="emailpersoninchange_1" id="emailpersoninchange_1" placeholder="email of person in change">
													</div>
												</div> -->						
												<!-- end Account -->											
											</div>
											<div class="newaccount-hidden cleaner">
												<div id="none" class="myrow color-style2 cleaner myopacity">													
													<div class="cleaner">
														<label for="none1">(*) Name of person in change:</label>
														<input type="text" class="style2" name="none1" id="none1" placeholder="name of person in change">
													</div>
													<div class="cleaner">
														<label for="none2">(*) Change in company:</label>
														<input type="text" class="style2" name="none2" id="none2" placeholder="change in company">
													</div>
													<div class="cleaner">
														<label for="none3">(*) E-mail of person in change:</label>
														<input type="text" class="style2" name="none3" id="none3" placeholder="email of person in change">
													</div>
													<span class="capa"></span>	
												</div>
											</div>									
											<div class="myrow multiselect cleaner color-style2">
												<label for="tags4search1">Tags for search:</label>
												<ul name="tags4search1" id="tags4search1" class="tags4search"></ul>
											</div>
										</div>
										<!-- Alert -->
										<div id="privacy" class="cleaner onlyregister" >
											<h3><i class="myicon-privacy"></i>some terms and conditions</h3>
											<h6>When an unknown printer took a galley of type and scrambled it to make a type </h6>
											<div class="cleaner">
												<div class="row cleaner">
													<ul class="mylist-1 cleaner">
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
													</ul>
												</div>
												<div class="cleaner otherbuts">
													<div class="cleaner">
														<a href="termsconditions.php" ><button type="button" class="but-type5">view all terms and condition</button></a>
													</div>
													<div class="cleaner">
														<div class="cleaner row">
															<div class="cleaner">
																<input type="checkbox" name="privacy3" id="privacy3" value="1" class="check" checked/>
																<label for="privacy3"></label>												
															</div>
															<div class="cleaner okterms"><p>I accept the terms and conditions</p></div>
														</div>	
													</div>
												</div>										
											</div>
										</div>
										<!-- But Update - Load - save- -->
										<div class="myrow but cleaner">
											<button class="butregister" type="submit"><i class="myicon-reg-register animated"></i>register my account</button>
											<div class="success cleaner animated"><p>this section has been updated successfully. <i class="myicon-done "></i></p></div>
										</div>
									</div>
								</form>
							</div>
						</dd>
							
						<!-- [3.1] Retailer -->
						<dt class="cleaner">
							<div class="titu cleaner">
								<h3><i class="myicon-reg-retailer"></i>im just want to buy</h3>
							</div>
							<div class="content cleaner">
								<span>Use this option if your interest in sale your products </span>
								<i class="myicon-reg-arrow"></i>
							</div>
						</dt>
						<!-- [3.2] Retailer Content-->
						<dd>
							<div id="reg-retailer" class="myform-style1 cleaner reg">								
								<form id="frm-reg-retailer" action="" class="cleaner" >																	
									<div class="cleaner" id="myset-content">
										<!-- Only Inputs -->
										<div id="onlyinputs" class="put-padding cleaner">
											<fieldset class="cleaner">(*) these fields are important and mandatory</fieldset>	
											<div class="myrow cleaner color-style2">
												<div class="cleaner">
													<label for="username">(*) Username:</label>
													<input type="text" class="style2" name="username" id="username" placeholder="username">
													<span id="clone">Hello, <em class="usernameclone retailer"></em> welcome!</span>
												</div>
												<div class="cleaner thetooltip">
													<label for="password">(*) Password:</label>
													<div class="cleaner thistooltip">
														<i class="myicon-helper"></i>
														<div class="mytooltip3 cleaner">
															<div class="cleaner">
																<p>rate this designer</p>
															</div>
														</div>
													</div>
													<input type="password" class="style2" name="password" id="password" placeholder="password">													
												</div>
												<div class="cleaner">
													<label for="repassword">(*) Confirm password:</label>
													<input type="password" class="style2" name="repassword" id="repassword" placeholder="repassword">
												</div>
											</div>
											<div class="myrow cleaner color-style2">												
												<div class="cleaner">
													<label for="name">(*) Name:</i></label>
													<input type="text" class="style2" name="name" id="name" placeholder="name">
												</div>
												<div class="cleaner">
													<label for="lastname">(*) Last Name:</label>
													<input type="text" class="style2" name="lastname" id="lastname" placeholder="lastname">
												</div>
											</div>										
											<div class="myrow color-style2 cleaner">
												<div class="cleaner nopadding">
													<label for="country">(*) Country:</label>
													<select name="country" id="country" class="selectpicker">
													    <option>Peru</option>
													    <option>Italia</option>
													    <option>USA</option>
												  	</select>
												</div>
												<div class="cleaner nopadding">
													<label for="city">(*) City:</i></label>
													<select name="city" id="city" class="selectpicker">
													    <option>New York</option>
													    <option>New yersey</option>
													    <option>Boston</option>
												  	</select>
												</div>
												<div class="cleaner">
													<label for="zipcode">(*) Zip code:</label>
													<input type="text" class="style1" name="zipcode" id="zipcode" placeholder="zip code">
												</div>
											</div>
											<div class="myrow color-style2 cleaner">
												<label for="address">Your address:</label>
												<input type="text" class="style1" name="address" id="address" placeholder="address">
											</div>
											
										</div>
										<!-- Alert -->
										<div id="privacy" class="cleaner onlyregister" >
											<h3><i class="myicon-privacy"></i>some terms and conditions</h3>
											<h6>When an unknown printer took a galley of type and scrambled it to make a type </h6>
											<div class="cleaner">
												<div class="row cleaner">
													<ul class="mylist-1 cleaner">
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
														<li><span>Make a type specimen book</span> lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el.</li>
													</ul>
												</div>
												<div class="cleaner otherbuts">
													<div class="cleaner">
														<a href="termsconditions.php" ><button type="button" class="but-type5">view all terms and condition</button></a>
													</div>
													<div class="cleaner">
														<div class="cleaner row">
															<div class="cleaner">
																<input type="checkbox" name="privacy1" id="privacy1" value="1" class="check" checked/>
																<label for="privacy1"></label>												
															</div>
															<div class="cleaner okterms"><p>I accept the terms and conditions</p></div>
														</div>	
													</div>
												</div>										
											</div>
										</div>
										<!-- But Update - Load - save- -->
										<div class="myrow but cleaner">
											<button class="butregister" type="submit"><i class="myicon-reg-register animated"></i>register my account</button>
											<div class="success cleaner animated"><p>this section has been updated successfully. <i class="myicon-done "></i></p></div>
										</div>
									</div>
								</form>
							</div>
						</dd>					
					</dl>
				</div>
			</article>
		</section>
		<?php include 'privado/includes/footer.php' ;?>
	</div>	
	<script src="privado/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<!--  Validate form  -->
	<script src="privado/js/jquery.validate.js"></script>
	<script src="privado/js/val.newsletter.js"></script>
	<!--  Select 2 bootstrap  -->
	<script src="privado/js/bootstrap.js"></script>
	<script src="privado/js/bootstrap-select.js"></script>
	<!--  main slider  -->
	<script src="privado/js/jquery.bxslider.min.js"></script>
	<!-- Fancybox -->
	<script src="privado/js/fancybox.js"></script>
	<!-- Placeholder -->
	<script src="privado/js/placeholder.js"></script>
	<!-- Multi tags -->
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>	
	<script src="privado/js/jquery.tag.it.min.js"></script>
	<!--  My apps  -->
	<!-- [1]App General -->
	<script src="privado/js/app.js"></script>
	<!-- [2]App to this page -->
	<script src="privado/js/app.register.js"></script>
	<!-- [3]App to Login (popup) -->
	<script src="privado/js/app.popup.js"></script>
	<!-- [4]App to Slider -->
	<script src="privado/js/app.bxslider.js"></script>
</body>
</html>