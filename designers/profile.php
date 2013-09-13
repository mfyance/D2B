<!doctype html>
<html lang="en">
<head>
	<?php include '../privado/includes/seo.php' ;?>	
	<link rel="stylesheet" href="privado/css/designers.css">	
	<link rel="stylesheet" href="privado/css/fancybox.css">
	<link rel="stylesheet" href="privado/css/jquery.bxslider.css">
	<link rel="stylesheet" href="privado/css/tagit.css">
	<!--[if lt IE 9]>
		<style>
			.content{
				height: auto;
				margin: 0;
			}
			.content div {
				position: relative;
			}
		</style>
	<![endif]-->	
	<title>Profile - D2B's Website</title>	
</head>
<body>
	<div id="designers" class="estructura logged">
		<?php include '../privado/includes/header2.php' ;?>	
		<section id="cuerpo" class="cleaner">
			<article class="maindetails cleaner">
				<div class="cleaner">
					<div class="titulo cleaner">
						<i class="myicon-user2"></i>
						<h3>designer name</h3>
						<span>Fashion designer</span>
					</div>
					<div class="date cleaner">
						<div class="cleaner">							
							<p><i class="myicon-calendar"></i>Member since:</p>
							<p>June 2012</p>	
						</div>
						<div class="cleaner">
							<span><i class="myicon-like"></i>65</span>
							<span><i class="myicon-view"></i>355</span>
						</div>
					</div>
				</div>
				<div class="but cleaner">
					<a href="createcollection.php"><button type="button"><i class="myicon-sky"></i>create a collection</button></a>
				</div>				
			</article>
			<article id="ajax-menu" class="cleaner">
				<div class="tabber" id="profilemenu">
					<div class="tabbertab">
						<h2>My profile <i></i> </h2>
						<div id="myprofile" class="content cleaner">
							<div class="helper cleaner">
								<p><i class="myicon-helper"></i>In  this secction you can upload and item, whit a description and more. <a href="#">How its works?</a></p>
							</div>
							<div class="myaccount cleaner">
								<div class="cleaner">									
									<div class="myphoto cleaner">                                                           
									    <img src="privado/imagenes/general/hiddenphoto.jpg" id="img-example" alt="add profile" title="add profile"> 
									    <p>Add a profile image</p>                            
									    <div class="foto-perfil">
									        <input type="file" name="inp-addprofile" id="inp-addprofile" onchange="GetFileInfo();" accept="image/*">      
									    </div>
									</div>
								</div>
								<div class="cleaner">
									<div class="info cleaner">
										<p>Short info:</p>
										<p><i class="myicon-from"></i><span>From:</span>Inslas Canarias, Spain.</p>
										<p><i class="myicon-tags"></i><span>Tags:</span>Vintage, Male clothing, show room.</p>
										<p><i class="myicon-calendar"></i><span>Member since:</span>June 2012.</p>
										<div class="share cleaner">
											<p class="cleaner"><i class="myicon-like"></i>65</p>
											<p class="cleaner"><i class="myicon-view"></i>65</p>
										</div>
									</div>
								</div>
								<div class="cleaner"><button id="editmyaccount" type="button">Edit my account setting <i class="myicon-settings"></i></button></div>
							</div>
							<!-- ** -->
							
							<!-- Hide - Show only with click about this -->
							<div id="mysettings" class="settings cleaner">
								<div class="cleaner"><span class="loading"></span></div>
								<div class="cleaner" id="myset-content">
									<form id="frm-setting" action="" class="cleaner" >
										<fieldset class="cleaner">(*) these fields are important and mandatory</fieldset>
										<div class="cleaner">
											<div class="myrow cleaner">
												<div class="cleaner">
													<label for="username">(*) Username:</label>
													<input type="text" class="style2" name="username" id="username" placeholder="username">
													<span id="clone">Hello, <em id="usernameclone"></em> welcome!</span>
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
											<div class="myrow cleaner">
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
											<div class="myrow cleaner">
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
											<div class="myrow cleaner">
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
												<div class="cleaner">
													<label for="country">(*) Country:</label>
													<select name="country" id="country" class="selectpicker">
													    <option>Peru</option>
													    <option>Italia</option>
													    <option>USA</option>
												  	</select>
												</div>
												<div class="cleaner">
													<label for="city">(*) City:</i></label>
													<select name="city" id="city" class="selectpicker">
													    <option>New York</option>
													    <option>New yersey</option>
													    <option>Boston</option>
												  	</select>
												</div>
												<div class="cleaner">
													<label for="zipcode">(*) Zip code:</label>
													<input type="text" name="zipcode" id="zipcode" placeholder="zip code">
												</div>
											</div>
											<div class="myrow color-style2 cleaner">
												<label for="address">Your address:</label>
												<input type="text" name="address" id="address" placeholder="address">
											</div>
											<div class="myrow multiselect cleaner">
												<label for="tags4search">Tags for search:</label>
												<ul name="tags4search" id="tags4search"></ul>
											</div>
										</div>
										<!-- -- -->
										<div class="cleaner" id="privacy">
											<h3><i class="myicon-privacy"></i>privacy</h3>
											<h6>Considered one of the most important designers of the United States by their dress .</h6>
											<div class="cleaner">
												<div class="row cleaner">
													<div class="cleaner">
														<input type="checkbox" name="privacy1" id="privacy1" value="1" class="check" />
														<label for="privacy1"></label>												
													</div>
													<div class="cleaner"><p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing </p></div>
												</div>
												<div class="row cleaner">
													<div class="cleaner">
														<input type="checkbox" name="privacy2" id="privacy2" value="1" class="check" />
														<label for="privacy2"></label>												
													</div>
													<div class="cleaner"><p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing </p></div>
												</div>
												<div class="row cleaner">
													<div class="cleaner">
														<input type="checkbox" name="privacy3" id="privacy3" value="1" class="check" />
														<label for="privacy3"></label>												
													</div>
													<div class="cleaner"><p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing </p></div>
												</div>
												<div class="row cleaner">
													<div class="cleaner">
														<input type="checkbox" name="privacy4" id="privacy4" value="1" class="check" />
														<label for="privacy4"></label>												
													</div>
													<div class="cleaner"><p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing </p></div>
												</div>
												<div class="row cleaner">
													<div class="cleaner">
														<input type="checkbox" name="privacy5" id="privacy5" value="1" class="check" />
														<label for="privacy5"></label>												
													</div>
													<div class="cleaner"><p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing </p></div>
												</div>
											</div>
										</div>
										<!-- - -->
										<div class="myrow but cleaner">
											<button class="but-type1 butupdate"><i class="myicon-update animated"></i>update profile</button>
											<div class="profile-update cleaner animated"><p>this section has been updated successfully. <i class="myicon-done "></i></p></div>
										</div>
									</form>
									
								</div>
							</div>
							<!-- end Settings -->
							<div id="myprofile-options" class="cleaner">		
						    	<div class="info-col col-left">						    		
						    		<dl>
						                <dt><i class="my-arrow"></i>about me</dt>
						                <dd>
						                	<div id="aboutme" class="noedit cleaner ">
									        	<div class="buts cleaner">
									        		<button type="button" id="aboutme-butcorrect" class="correct"><i class="myicon-correct"></i></button>
									        	</div>
									            <textarea name="aboutme-txtarea" id="aboutme-txtarea" placeholder="what about me..." readonly>D2BDesigners to Business - D2BDesigners to Business - D2B</textarea> 
									            <button type="button" class="butsave"><i class="myicon-save animated"></i> Save changes</button>
									        </div>
						                </dd>

						                <dt><i class="my-arrow"></i>work experience</dt>
						                <dd>
						                	<div id="workexperience" class="noedit cleaner">
												<div class="box cleaner">
														<div class="ico"><i class="myicon-experience"></i></div>
														<input type="text" placeholder="Title here">
														<textarea name="wexp-ta1" id="wexp-ta1" placeholder="Describe your news (300 character max)"></textarea>
														<em id="wexp-count-ta1" class="countLimited">0/300</em>
														<button type="button" class="butpublic"><i class="myicon-plus animated animated"></i>Public this new</button>
												</div>
												<div class="list cleaner">
														<div class="cleaner">
															<i class="myicon-point"></i>
															<input type="text" value="Ej. Fashion designer" readonly>
															<textarea id="wexp-ta2" name="wexp-ta2" placeholder="Describe your news (300 character max)" readonly>Ej. Whit stuyds in Marangoin Fashion School Milan.</textarea>
															<em id="wexp-count-ta2" class="countLimited">0/300</em>
														</div>
														<div class="cleaner">
															<button type="button" id="wexp-butcancel" class="cancel"><i class="myicon-cancel"></i></button>
															<button type="button" id="wexp-butcorrect" class="correct"><i class="myicon-correct"></i></button>
														</div>
												</div>								          
												<div class="cleaner save"><button type="button" class="butsave"><i class="myicon-save animated"></i>Save changes</button></div>
											</div>
						                </dd>

						                <dt><i class="my-arrow"></i>Add images</dt>
						                <dd>
						                	<div id="addimages">
									            <p>You cand add images or poster of your latest events</p>
									            <div class="box cleaner">
									           		<div class="ico"><i class="myicon-experience"></i></div>
									           		<input type="text" placeholder="Title here">									           		
									           		<textarea name="addimage-ta2" id="addimage-ta2" placeholder="Describe your news (300 character max)"></textarea>
									           		<em id="addimage-count-ta2" class="countLimited">0/300</em>
									            </div>
									            <div class="box cleaner">
									           		<div class="ico">
									           			<input type="file" name="addimages1" id="addimages1" multiple />
									           			<i class="myicon-upphoto"></i>
									           		</div>
									           		<input class="pic-info" type  ="text" id="new-addimages1" name="new-addimages1"  placeholder="Add an image (120mb max)">								           		
									           		<div class="progressbar cleaner">
														<span class="loading"></span>
													</div>
													<div class="done cleaner"><p>done<i class="myicon-done"></i></p></div>
													<button type="button" class="begin-progress butpublic cleaner"><i class="myicon-plus animated"></i>Public this new</button>																						
									            </div>									           
									        </div>
						                </dd>
						    		</dl>
						    		<div class="posts cleaner">
						    			<figure class="myphoto cleaner">
											<img src="privado/imagenes/designers/addimages/1.jpg" alt="my profile">
											<figcaption class="cleaner">
												<em>fashion runway- fall winter 2013</em>
												<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>
											</figcaption class="cleaner">
											<div class="cleaner">
												<button type="button" class="butshare">Share this news<i class="myicon-share animated"></i></button>
												<button class="butlike" type="button" class="cleaner">
													<div class="cleaner"><i class="myicon-heart animated"></i></div>
												</button>
											</div>
										</figure>
										<ul id="image-list" class="cleaner"></ul>
						    		</div>
						    	</div>
						    	<div class="info-col col-right cleaner">
						    		<dl>
						                <dt><i class="my-arrow"></i>add news</dt>
						                <dd>
						                	<div id="addnews">
									            <p>You cand add images or poster of your latest events</p>
									            <div class="addnews-tab cleaner">
										            <input id="tab-1" type="radio" name="radio-set" class="addnews-tab-selector-1" checked="checked" />
											        <label for="tab-1" class="addnews-tab-label-1">Add a new<i class="myicon-addnew"></i></label>
											
										            <input id="tab-2" type="radio" name="radio-set" class="addnews-tab-selector-2" />
											        <label for="tab-2" class="addnews-tab-label-2">Add a video<i class="myicon-addvideo"></i></label>
											
										            <input id="tab-3" type="radio" name="radio-set" class="addnews-tab-selector-3" />
											        <label for="tab-3" class="addnews-tab-label-3">Post a image<i class="myicon-addimage"></i></label>

											        <div class="addnews-content cleaner">
												        <div class="addnews-content-1">
												        	<div class="superbox cleaner">
												        		<div class="box cleaner">
													           		<div class="ico"><i class="myicon-experience"></i></div>
													           		<input type="text" placeholder="Title here">
													           		<textarea id="addnew-ta1" name="addnew-ta1" placeholder="Describe your news (300 character max)"></textarea>
									           						<em id="addnew-count-ta1" class="countLimited">0/300</em>
													           </div>
												        	</div>
												        	<div class="superbox cleaner">
												        		<div class="box cleaner">
													           		<div class="ico">
													           			<input type="file" name="addimages2" id="addimages2" multiple />
													           			<i class="myicon-upphoto"></i>
													           		</div>
													           		<input id="new-addimages2" class="pic-info" type="text" placeholder="Add an image (120mb max)">								           		
													           		<div class="progressbar cleaner">
																		<span class="loading"></span>
																	</div>
																	<div class="done cleaner"><p>done<i class="myicon-done"></i></p></div>
													            </div>
												        	</div>
												        	<div class="superbox cleaner">
												        		<div class="superbox cleaner">
													        		<div class="box cleaner">
														           		<div class="ico"><i class="ico2 myicon-place"></i></div>
														           		<input type="text" placeholder="Where  do this happend (optional)">
														           		<button type="button" class="begin-progress butpublic cleaner"><i class="myicon-plus animated"></i>Public this new</button>																					
														           	</div>											           		
													           	</div>
												        	</div>
												        </div>
												        <div class="addnews-content-2">
												        	<div class="superbox cleaner">
												        		<div class="box cleaner">
													           		<div class="ico"><i class="myicon-experience"></i></div>
													           		<input type="text" placeholder="Url here">
													           		<textarea id="addvideo-ta1" name="addvideo-ta1" placeholder="Describe your news (300 character max)"></textarea>
									           						<em id="addvideo-count-ta1" class="countLimited">0/300</em>
													           </div>
													           <div class="superbox cleaner">
													        		<div class="box cleaner">
													        			<div class="progressbar cleaner">
																			<span class="loading"></span>
																		</div>
																		<div class="done cleaner"><p>done<i class="myicon-done"></i></p></div>													           		
														           		<button type="button" class="begin-progress butpublic cleaner"><i class="myicon-plus animated"></i>Public this new</button>																					
														           	</div>												           		
													           	</div>
												        	</div>												        	
												        </div>
												        <div class="addnews-content-3">												        	
												        	<div class="superbox cleaner">
												        		<div class="box cleaner">
													           		<div class="ico">
													           			<input type="file" name="addimages3" id="addimages3" multiple />
													           			<i class="myicon-upphoto"></i>
													           		</div>
													           		<input id="new-addimages3" class="pic-info" type="text" placeholder="Add an image (120mb max)">								           		
													           		<div class="progressbar cleaner">
																		<span class="loading"></span>
																	</div>
																	<div class="done cleaner"><p>done<i class="myicon-done"></i></p></div>
													            </div>
												        	</div>
												        	<div class="superbox cleaner">
												        		<div class="box cleaner">
													           		<div class="ico"><i class="myicon-experience"></i></div>
													           		<input type="text" placeholder="Title here">
													           		<textarea id="addimage-ta1" name="addimage-ta1" placeholder="Describe your news (300 character max)"></textarea>
									           						<em id="addimage-count-ta1" class="countLimited">0/300</em>
													           </div>
												        	</div>
												        	<div class="superbox cleaner">
												        		<div class="superbox cleaner">
													        		<div class="box cleaner">
														           		<div class="ico"><i class="ico2 myicon-place"></i></div>
														           		<input type="text" placeholder="Where  do this happend (optional)">
														           		<button type="button" class="begin-progress butpublic cleaner"><i class="myicon-plus animated"></i>Public this new</button>																					
														           	</div>												           		
													           	</div>
												        	</div>
												        </div>		   
											        </div>
												</div>
									        </div>
						                </dd>
						    		</dl>
						    		<div class="posts post-news cleaner noedit">
						    			<div class="cleaner">
						    				<img src="privado/imagenes/designers/addimages/2.jpg" alt="add iamges">
						    				<div class="social cleaner">
							    				<div class="cleaner">
													<button type="button" class="butshare">Share this news <i class="myicon-share animated"></i>
														<div class="mytooltip2 cleaner">
															<div class="cleaner">
																<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog', 'width=626,height=436'); return false;"><i class="myicon-facebook-2"></i></a>
															</div>
															<div class="cleaner">
																<a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('http://twitter.com/share','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/bookmarklets/share.js?v=1';F.getElementsByTagName('head')[0].appendChild(E)}());"><i class="myicon-twitter-2"></i></a>
															</div>
														</div>
													</button>
													<button class="butlike" type="button" class="cleaner">
														<div class="cleaner"><i class="myicon-heart animated"></i></div>
													</button>
												</div>
							    				<div class="cleaner"></div>
							    			</div>		
						    			</div>
						    			<div class="cleaner">
						    				<div class="post-but cleaner">
												<button type="button" id="post-butcancel1" class="cancel"><i class="myicon-cancel"></i></button>
												<button type="button" id="post-butcorrect1" class="correct"><i class="myicon-correct"></i></button>
											</div>
						    				<div class="titulo">
						    					<textarea class="post-txtarea1" id="post-titulo-1" name="post-txtarea1" placeholder="Describe your news (300 character max)" readonly>BENJAMIN EIDEM STARS IN HUGO BOSS ORANGE FALL/WINTER 2013 WATCHES CAMPAIGN</textarea>
						    				</div>
						    				<div class="cleaner">
						    					<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>						    					
						    				</div>
						    				<div class="descrip cleaner">
							    				<textarea class="post-txtarea2 ta_autoheigth"  id="post-descrip-1" name="post-descrip-1" placeholder="Describe your news (300 character max)" readonly>New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this. New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this. New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this. New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this. New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this. New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this. New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this. New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this.</textarea>
							    			</div>
							    			<div class="cleaner">
						    					<button type="button" class="butsave"><i class="myicon-save animated"></i> Save changes</button>
						    				</div>
						    			</div>						    							    						    			
						    		</div>
						    		<div class="posts post-image cleaner noedit">
						    			<div class="cleaner mypic"><img src="privado/imagenes/designers/addimages/3.jpg" alt="my post"></div>
						    			<div class="titulo cleaner">
						    				<input type="text" value=" fashion FASHION RUNWAY - FALL WINTER  2013">
						    				<div class="post-but cleaner">
												<button type="button" id="post-butcancel2" class="cancel"><i class="myicon-cancel"></i></button>
												<button type="button" id="post-butcorrect2" class="correct"><i class="myicon-correct"></i></button>
											</div>
						    			</div>
										<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>
										<div class="cleaner">
											<textarea name="ta_postimage1" id="ta_postimage1">Magna cras cursus tincidunt integer dolor turpis eros enim. Lectus, magna nec ultricies nunc mauris mus etiam. Magna cras cursus tincidunt integer dolor turpis eros enim. Lectus, magna nec ultricies nunc mauris mus etiam. Magna cras cursus tincidunt integer dolor turpis eros enim. Lectus, magna nec ultricies nunc mauris mus etiam. Magna cras cursus tincidunt integer dolor turpis eros enim. Lectus, magna nec ultricies nunc mauris mus etiam.</textarea>
										</div>
										<div class="social cleaner">
						    				<div class="cleaner">
												<button type="button" class="butshare">Share this news <i class="myicon-share animated"></i>
													<div class="mytooltip2 cleaner">
														<div class="cleaner">
															<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog', 'width=626,height=436'); return false;"><i class="myicon-facebook-2"></i></a>
														</div>
														<div class="cleaner">
															<a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('http://twitter.com/share','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/bookmarklets/share.js?v=1';F.getElementsByTagName('head')[0].appendChild(E)}());"><i class="myicon-twitter-2"></i></a>
														</div>
													</div>
												</button>
												<button class="butlike" type="button" class="cleaner">
													<div class="cleaner"><i class="myicon-heart animated"></i></div>
												</button>
											</div>
						    				<div class="cleaner">
						    					<button type="button" class="butsave"><i class="myicon-save animated"></i> Save changes</button>
						    				</div>
						    			</div>			
						    		</div>
						    		<div class="posts post-video cleaner noedit">
						    			<div class="cleaner thevideo"><iframe src="//www.youtube.com/embed/E5TpQV0o1dc" frameborder="0" allowfullscreen></iframe></div>
						    			<div class="titulo cleaner">
						    				<input type="text" value=" fashion FASHION RUNWAY - FALL WINTER  2013">
						    				<div class="post-but cleaner">
												<button type="button" id="post-butcancel3" class="cancel"><i class="myicon-cancel"></i></button>
												<button type="button" id="post-butcorrect3" class="correct"><i class="myicon-correct"></i></button>
											</div>
						    			</div>
										<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>
										<div class="cleaner">
											<textarea name="">Magna cras cursus tincidunt integer dolor turpis eros enim. Lectus, magna nec ultricies nunc mauris mus etiam.</textarea>
										</div>
										<div class="social cleaner">
						    				<div class="cleaner">
												<button type="button" class="butshare">Share this news <i class="myicon-share animated"></i>
													<div class="mytooltip2 cleaner">
														<div class="cleaner">
															<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog', 'width=626,height=436'); return false;"><i class="myicon-facebook-2"></i></a>
														</div>
														<div class="cleaner">
															<a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('http://twitter.com/share','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/bookmarklets/share.js?v=1';F.getElementsByTagName('head')[0].appendChild(E)}());"><i class="myicon-twitter-2"></i></a>
														</div>
													</div>
												</button>
												<button class="butlike" type="button" class="cleaner">
													<div class="cleaner"><i class="myicon-heart animated"></i></div>
												</button>
											</div>
						    				<div class="cleaner">
						    					<p class="butview"><i class="myicon-post-view"></i>260.233</p>
						    				</div>
						    			</div>			
						    		</div>				    		
						    	</div>
						    	<!-- This DIV will be cloned -->
								<div class="info-col col-full view-old-posts cleaner">
									<button type="button" class="butoldview">View older posts</button>
									<div class="info-col col-full old-posts animated cleaner">
										<div class="info-col col-left">
											<div class="posts cleaner" data-start="-webkit-transform: scale(0.5);-ms-transform: scale(0.5);-moz-transform: scale(0.5);-o-transform: scale(0.5);" data-delay="50" data-transit="scale:1">
								    			<figure class="myphoto cleaner">
													<img src="privado/imagenes/designers/addimages/1.jpg" alt="my profile">
													<figcaption class="cleaner">
														<em>fashion runway- fall winter 2013</em>
														<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>
													</figcaption>
													<div class="cleaner">
														<button type="button" class="butshare">Share this news <i class="myicon-share animated"></i>
															<div class="mytooltip2 cleaner">
																<div class="cleaner">
																	<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog', 'width=626,height=436'); return false;"><i class="myicon-facebook-2"></i></a>
																</div>
																<div class="cleaner">
																	<a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('http://twitter.com/share','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/bookmarklets/share.js?v=1';F.getElementsByTagName('head')[0].appendChild(E)}());"><i class="myicon-twitter-2"></i></a>
																</div>
															</div>
														</button>
														<button class="butlike" type="button">
															<div class="cleaner"><i class="myicon-heart animated"></i></div>
														</button>
													</div>
												</figure>											
								    		</div>
										</div>
										<div class="info-col col-right cleaner">
											<div class="posts post-news cleaner noedit" data-start="-webkit-transform: scale(0.5);-ms-transform: scale(0.5);-moz-transform: scale(0.5);-o-transform: scale(0.5);" data-delay="50" data-transit="scale:1">
								    			<div class="cleaner"><img src="privado/imagenes/designers/addimages/2.jpg" alt="add iamges"></div>
								    			<div class="cleaner">
								    				<div class="post-but cleaner">
														<button type="button" id="post-butcancel1" class="cancel"><i class="myicon-cancel"></i></button>
														<button type="button" id="post-butcorrect1" class="correct"><i class="myicon-correct"></i></button>
													</div>
								    				<div class="titulo">
								    					<textarea class="post-txtarea1" id="post-titulo-1" name="post-txtarea1" placeholder="Describe your news (300 character max)" readonly>BENJAMIN EIDEM STARS IN HUGO BOSS ORANGE FALL/WINTER 2013 WATCHES CAMPAIGN</textarea>
								    				</div>
								    				<div class="cleaner">
								    					<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>						    					
								    				</div>
								    				<div class="descrip cleaner">
									    				<textarea class="post-txtarea2" id="post-descrip-1" name="post-descrip-1" placeholder="Describe your news (300 character max)" readonly>New, his experience goes beyond the academia; since 2009 he works as a volunteer at World Christian Mission. Through this work, he has helped this.</textarea>
									    			</div>
								    			</div>
								    			<div class="social cleaner">
								    				<div class="cleaner">
														<button type="button" class="butshare">Share this news <i class="myicon-share animated"></i>
															<div class="mytooltip2 cleaner">
																<div class="cleaner">
																	<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog', 'width=626,height=436'); return false;"><i class="myicon-facebook-2"></i></a>
																</div>
																<div class="cleaner">
																	<a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('http://twitter.com/share','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/bookmarklets/share.js?v=1';F.getElementsByTagName('head')[0].appendChild(E)}());"><i class="myicon-twitter-2"></i></a>
																</div>
															</div>
														</button>
														<button class="butlike" type="button" class="cleaner">
															<div class="cleaner"><i class="myicon-heart animated"></i></div>
														</button>
													</div>
								    				<div class="cleaner">
								    					<button type="button" class="butsave"><i class="myicon-save animated"></i> Save changes</button>
								    				</div>
								    			</div>					    			
								    		</div>
								    		<div class="posts post-image cleaner noedit" data-start="-webkit-transform: scale(0.5);-ms-transform: scale(0.5);-moz-transform: scale(0.5);-o-transform: scale(0.5);" data-delay="50" data-transit="scale:1">
								    			<div class="cleaner mypic"><img src="privado/imagenes/designers/addimages/3.jpg" alt="my post"></div>
								    			<div class="titulo cleaner">
								    				<input type="text" value=" fashion FASHION RUNWAY - FALL WINTER  2013">
								    				<div class="post-but cleaner">
														<button type="button" id="post-butcancel2" class="cancel"><i class="myicon-cancel"></i></button>
														<button type="button" id="post-butcorrect2" class="correct"><i class="myicon-correct"></i></button>
													</div>
								    			</div>
												<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>
												<div class="cleaner">
													<textarea name="">Magna cras cursus tincidunt integer dolor turpis eros enim. Lectus, magna nec ultricies nunc mauris mus etiam.</textarea>
												</div>
												<div class="social cleaner">
								    				<div class="cleaner">
														<button type="button" class="butshare">Share this news <i class="myicon-share animated"></i>
															<div class="mytooltip2 cleaner">
																<div class="cleaner">
																	<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog', 'width=626,height=436'); return false;"><i class="myicon-facebook-2"></i></a>
																</div>
																<div class="cleaner">
																	<a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('http://twitter.com/share','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/bookmarklets/share.js?v=1';F.getElementsByTagName('head')[0].appendChild(E)}());"><i class="myicon-twitter-2"></i></a>
																</div>
															</div>
														</button>
														<button class="butlike" type="button" class="cleaner">
															<div class="cleaner"><i class="myicon-heart animated"></i></div>
														</button>
													</div>
								    				<div class="cleaner">
								    					<button type="button" class="butsave"><i class="myicon-save animated"></i> Save changes</button>
								    				</div>
								    			</div>			
								    		</div>
								    		<div class="posts post-video cleaner noedit" data-start="-webkit-transform: scale(0.5);-ms-transform: scale(0.5);-moz-transform: scale(0.5);-o-transform: scale(0.5);" data-delay="50" data-transit="scale:1">
								    			<div class="cleaner thevideo"><iframe src="//www.youtube.com/embed/E5TpQV0o1dc" frameborder="0" allowfullscreen></iframe></div>
								    			<div class="titulo cleaner">
								    				<input type="text" value=" fashion FASHION RUNWAY - FALL WINTER  2013">
								    				<div class="post-but cleaner">
														<button type="button" id="post-butcancel3" class="cancel"><i class="myicon-cancel"></i></button>
														<button type="button" id="post-butcorrect3" class="correct"><i class="myicon-correct"></i></button>
													</div>
								    			</div>
												<div class="postdetails cleaner"><i class="myicon-calendar"></i>Post:<time>Monday 13-2012</time><span><i class="myicon-like"></i>65</span></div>
												<div class="cleaner">
													<textarea name="">Magna cras cursus tincidunt integer dolor turpis eros enim. Lectus, magna nec ultricies nunc mauris mus etiam.</textarea>
												</div>
												<div class="social cleaner">
								    				<div class="cleaner">
														<button type="button" class="butshare">Share this news <i class="myicon-share animated"></i>
															<div class="mytooltip2 cleaner">
																<div class="cleaner">
																	<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog', 'width=626,height=436'); return false;"><i class="myicon-facebook-2"></i></a>
																</div>
																<div class="cleaner">
																	<a href="javascript:(function(){window.twttr=window.twttr||{};var D=550,A=450,C=screen.height,B=screen.width,H=Math.round((B/2)-(D/2)),G=0,F=document,E;if(C>A){G=Math.round((C/2)-(A/2))}window.twttr.shareWin=window.open('http://twitter.com/share','','left='+H+',top='+G+',width='+D+',height='+A+',personalbar=0,toolbar=0,scrollbars=1,resizable=1');E=F.createElement('script');E.src='http://platform.twitter.com/bookmarklets/share.js?v=1';F.getElementsByTagName('head')[0].appendChild(E)}());"><i class="myicon-twitter-2"></i></a>
																</div>
															</div>
														</button>
														<button class="butlike" type="button" class="cleaner">
															<div class="cleaner"><i class="myicon-heart animated"></i></div>
														</button>
													</div>
								    				<div class="cleaner">
								    					<p class="butview"><i class="myicon-post-view"></i>260.233</p>
								    				</div>
								    			</div>			
								    		</div>
										</div>
									</div>
								</div>
								<!-- End Object cloned						 -->
						        <div class="info-col col-full cleaner">
						            <dl>
						                <dt><i class="my-arrow"></i>add inspirations image</dt>
						                <dd>
						                	<div id="addinspirations" class="cleaner">
									            <div class="themself cleaner">
									            	<div class="box cleaner">
										           		<div class="ico"><i class="myicon-experience"></i></div>
										           		<input type="text" placeholder="Title here">
										           		<textarea id="addinsp-ta1" name="addinsp-ta1" placeholder="Describe your news (300 character max)"></textarea>
									           			<em id="addinsp-count-ta1" class="countLimited">0/300</em>							           		
										            </div>
										            <div class="box cleaner">
										           		<div class="ico">
										           			<input type="file" name="addimages4" id="addimages4" multiple />
										           			<i class="myicon-upphoto"></i>
										           		</div>
										           		<input id="new-addimages4" class="pic-info" type="text" placeholder="Add an image (120mb max)">								           		
										           		<div class="progressbar cleaner">
															<span class="loading"></span>
														</div>
														<div class="done cleaner"><p>done<i class="myicon-done"></i></p></div>
														<button type="button" class="begin-progress butpublic cleaner"><i class="myicon-upphoto-white animated"></i>Add this photo</button>																					
										            </div>	
									            </div>

									        </div>
						                </dd>          
						            </dl>
						        </div>
						        <div div id="banner" class="banner-style2 myhover-style2 info-col col-full cleaner">
									<div class="ban-slide cleaner">
										<ul class="bxslider">
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/1.jpg">
													<img src="privado/imagenes/designers/addinspirations/1.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>											
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/2.jpg">
													<img src="privado/imagenes/designers/addinspirations/2.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/3.jpg">
													<img src="privado/imagenes/designers/addinspirations/3.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/4.jpg">
													<img src="privado/imagenes/designers/addinspirations/4.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/1.jpg">
													<img src="privado/imagenes/designers/addinspirations/1.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>											
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/2.jpg">
													<img src="privado/imagenes/designers/addinspirations/2.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/3.jpg">
													<img src="privado/imagenes/designers/addinspirations/3.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>
											<li class="addinspiration-img">
												<a class="fancybox" href="privado/imagenes/designers/addinspirations/4.jpg">
													<img src="privado/imagenes/designers/addinspirations/4.jpg">
													<div class="myhover cleaner animated">
														<div class="post-but cleaner">
															<button type="button" id="post-butcancel6" class="inspimg"><i class="myicon-cancel"></i></button>
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-correct"></i></button>
														</div>
														<div class="descrip cleaner">
															<p>Loren ipstum name of the picture</p>
															<p>Massa risus nunc! Nisi et et mus lectus risus auctor eu tincidunt adipiscing adipiscing mattis? Massa. Turpis turpis! Pulvinar dium pellentesque.</p>
														</div>
														<div class="magnify cleaner">
															<button type="button" id="post-butcorrect6" class="inspimg"><i class="myicon-tags"></i></button>
														</div>
													</div>	
												</a>
											</li>
										</ul>
						            </div>		
						        </div>
						        <div class="but info-col col-full cleaner cleaner">
									<button class="but-type1 butupdate"><i class="myicon-update animated"></i>update profile</button>
									<div class="profile-update cleaner animated"><p>this section has been updated successfully. <i class="myicon-done "></i></p></div>
								</div>
						    </div>
						</div>				
					</div>
					<div class="tabbertab">
						<h2>my collections</h2>
						<div id="mycollection" class="tabber">
							<div class="tabbertab">
								<h2>View all your collection</h2>
								<div class="content cleaner">
									<div class="helper cleaner">
										<p><i class="myicon-helper"></i>In  this secction you can upload and item, whit a description and more. <a href="#">How its works?</a></p>
									</div>
									<div class="collectionmenu cleaner">
										<input id="collection-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
										<label for="collection-1" class="label-mymenu tab-label-1">Recently created<i class="icon-caret-right"></i></label>
										<input id="collection-2" type="radio" name="radio-set" class="tab-selector-2" />
										<label for="collection-2" class="label-mymenu tab-label-2">Most populars<i class="icon-caret-right"></i></label>
										<input id="collection-3" type="radio" name="radio-set" class="tab-selector-3" />
										<label for="collection-3" class="label-mymenu tab-label-3">Most views<i class="icon-caret-right"></i></label>

										<div class="content-tabs cleaner">
											<div class="cleaner content-tabs-1">
												<!-- Colecction 1 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/collection/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter 1</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">																
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible1" id="makeitvisible1" value="1" class="check" />
																	<label for="makeitvisible1"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Colection 2 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/collection/2.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter13</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">																
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible2" id="makeitvisible2" value="1" class="check" />
																	<label for="makeitvisible2"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="pag-seasson cleaner">												
													<div class="pagging cleaner">
														<div class="prev cleaner"><a href="#">prev</a></div>
														<div class="page cleaner"><a href="#" class="active">1</a></div>
														<div class="page cleaner"><a href="#">2</a></div>
														<div class="page cleaner"><a href="#">3</a></div>
														<div class="page cleaner"><a href="#">4</a></div>
														<div class="page cleaner"><a href="#">5</a></div>
														<div class="next cleaner"><a href="#">next</a></div>
													</div>					
												</div>
											</div>
											<div class="cleaner content-tabs-2">
												<!-- Colecction 1 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/collection/3.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter 2</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">																
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible3" id="makeitvisible3" value="1" class="check" />
																	<label for="makeitvisible3"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Colection 2 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/collection/4.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter13</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">																
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible4" id="makeitvisible4" value="1" class="check" />
																	<label for="makeitvisible4"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="pag-seasson cleaner">												
													<div class="pagging cleaner">
														<div class="prev cleaner"><a href="#">prev</a></div>
														<div class="page cleaner"><a href="#" class="active">1</a></div>
														<div class="page cleaner"><a href="#">2</a></div>
														<div class="page cleaner"><a href="#">3</a></div>
														<div class="page cleaner"><a href="#">4</a></div>
														<div class="page cleaner"><a href="#">5</a></div>
														<div class="next cleaner"><a href="#">next</a></div>
													</div>					
												</div>
											</div>
											<div class="cleaner content-tabs-3">
												<!-- Colecction 1 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/collection/5.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter 3</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">																
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible5" id="makeitvisible5" value="1" class="check" />
																	<label for="makeitvisible5"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Colection 2 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/collection/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter13</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">																
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible6" id="makeitvisible6" value="1" class="check" />
																	<label for="makeitvisible6"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="pag-seasson cleaner">												
													<div class="pagging cleaner">
														<div class="prev cleaner"><a href="#">prev</a></div>
														<div class="page cleaner"><a href="#" class="active">1</a></div>
														<div class="page cleaner"><a href="#">2</a></div>
														<div class="page cleaner"><a href="#">3</a></div>
														<div class="page cleaner"><a href="#">4</a></div>
														<div class="page cleaner"><a href="#">5</a></div>
														<div class="next cleaner"><a href="#">next</a></div>
													</div>					
												</div>
											</div>					
										</div>
									</div>
								</div>
							</div>
							<div class="tabbertab">
								<h2>View all your items</h2>
								<div class="content cleaner">
									<div class="helper cleaner">
										<p><i class="myicon-helper"></i>In  this secction you can upload and item, whit a description and more. <a href="#">How its works?</a></p>
									</div>
									<div class="collectionmenu cleaner">
										<input id="items-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
										<label for="items-1" class="label-mymenu tab-label-1">Recently created<i class="icon-caret-right"></i></label>
										<input id="items-2" type="radio" name="radio-set" class="tab-selector-2" />
										<label for="items-2" class="label-mymenu tab-label-2">Most populars<i class="icon-caret-right"></i></label>
										<input id="items-3" type="radio" name="radio-set" class="tab-selector-3" />
										<label for="items-3" class="label-mymenu tab-label-3">Most views<i class="icon-caret-right"></i></label>	

										<div class="content-tabs cleaner">
											<div class="cleaner content-tabs-1">
												<!-- Items 1 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/designers/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter 1</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">
																<p>Size:<span>M</span></p>																
																<div id="othercolor" class="tooltip-dress">
																	<p>Color:</p>
																	<p>Green</p>
																	<p>(others color)</p>
																	<div class="mytooltip2">
																		<em>Avaibles colors for this item</em>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/1.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/2.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/3.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/4.jpg" alt="">
																		</figure>
																	</div>			
																</div>															
																<p>Stock:<span>20</span></p>
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible1" id="makeitvisible1" value="1" class="check" />
																	<label for="makeitvisible1"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Items 2 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/designers/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter13</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">
																<p>Size:<span>M</span></p>																
																<div id="othercolor" class="tooltip-dress">
																	<p>Color:</p>
																	<p>Green</p>
																	<p>(others color)</p>
																	<div class="mytooltip2">
																		<em>Avaibles colors for this item</em>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/1.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/2.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/3.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/4.jpg" alt="">
																		</figure>
																	</div>			
																</div>															
																<p>Stock:<span>20</span></p>
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible2" id="makeitvisible2" value="1" class="check" />
																	<label for="makeitvisible2"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="pag-seasson cleaner">												
													<div class="pagging cleaner">
														<div class="prev cleaner"><a href="#">prev</a></div>
														<div class="page cleaner"><a href="#" class="active">1</a></div>
														<div class="page cleaner"><a href="#">2</a></div>
														<div class="page cleaner"><a href="#">3</a></div>
														<div class="page cleaner"><a href="#">4</a></div>
														<div class="page cleaner"><a href="#">5</a></div>
														<div class="next cleaner"><a href="#">next</a></div>
													</div>					
												</div>
											</div>
											<div class="cleaner content-tabs-2">
												<!-- Items 1 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/designers/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter 2</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">
																<p>Size:<span>M</span></p>																
																<div id="othercolor" class="tooltip-dress">
																	<p>Color:</p>
																	<p>Green</p>
																	<p>(others color)</p>
																	<div class="mytooltip2">
																		<em>Avaibles colors for this item</em>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/1.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/2.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/3.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/4.jpg" alt="">
																		</figure>
																	</div>			
																</div>															
																<p>Stock:<span>20</span></p>
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible3" id="makeitvisible3" value="1" class="check" />
																	<label for="makeitvisible3"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Items 2 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/designers/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter13</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">
																<p>Size:<span>M</span></p>																
																<div id="othercolor" class="tooltip-dress">
																	<p>Color:</p>
																	<p>Green</p>
																	<p>(others color)</p>
																	<div class="mytooltip2">
																		<em>Avaibles colors for this item</em>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/1.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/2.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/3.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/4.jpg" alt="">
																		</figure>
																	</div>			
																</div>															
																<p>Stock:<span>20</span></p>
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible4" id="makeitvisible4" value="1" class="check" />
																	<label for="makeitvisible4"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="pag-seasson cleaner">												
													<div class="pagging cleaner">
														<div class="prev cleaner"><a href="#">prev</a></div>
														<div class="page cleaner"><a href="#" class="active">1</a></div>
														<div class="page cleaner"><a href="#">2</a></div>
														<div class="page cleaner"><a href="#">3</a></div>
														<div class="page cleaner"><a href="#">4</a></div>
														<div class="page cleaner"><a href="#">5</a></div>
														<div class="next cleaner"><a href="#">next</a></div>
													</div>					
												</div>
											</div>
											<div class="cleaner content-tabs-3">
												<!-- Items 1 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/designers/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter 3</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">
																<p>Size:<span>M</span></p>																
																<div id="othercolor" class="tooltip-dress">
																	<p>Color:</p>
																	<p>Green</p>
																	<p>(others color)</p>
																	<div class="mytooltip2">
																		<em>Avaibles colors for this item</em>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/1.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/2.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/3.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/4.jpg" alt="">
																		</figure>
																	</div>			
																</div>															
																<p>Stock:<span>20</span></p>
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible5" id="makeitvisible5" value="1" class="check" />
																	<label for="makeitvisible5"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Items 2 -->
												<div class="listarcolecciones cleaner">
													<figure class="cleaner">
														<img src="privado/imagenes/designers/1.jpg" alt="">
													</figure>
													<div class="figcaption cleaner">
														<div class="cleaner">
															<div class="first cleaner">
																<div class="title cleaner">
																	<h3>Dirk Bikkembergs Milan  Fall/Winter13</h3>
																</div>
																<div class="details cleaner">
																	<div class="cleaner">
																		<p>by Miharashiro</p>
																	</div>
																	<div class="cleaner">
																		<p><span><i class="myicon-calendar"></i>Post:</span> June 2012.</p>
																	</div>
																</div>
															</div>
															<div class="second cleaner">
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-like"></i>65
																	</button>	
																</div>
																<div class="rate cleaner">
																	<button type="button">
																		<i class="myicon-view"></i>65
																	</button>
																</div>
																<div class="rate close cleaner">
																	<a class="fancybox" href="#deletecollection"><button type="button" class="myicon-close">					
																	</button></a>																	
																</div>
															</div>
														</div>
														<div class="cleaner">
															<div class="resumen">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
																<p><a href="#">Read more</a></p>
															</div>
														</div>
														<div class="cleaner">
															<div class="info cleaner">
																<p>Size:<span>M</span></p>																
																<div id="othercolor" class="tooltip-dress">
																	<p>Color:</p>
																	<p>Green</p>
																	<p>(others color)</p>
																	<div class="mytooltip2">
																		<em>Avaibles colors for this item</em>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/1.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/2.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/3.jpg" alt="">
																		</figure>
																		<figure>																				
																			<img src="privado/imagenes/designers/preview/4.jpg" alt="">
																		</figure>
																	</div>			
																</div>															
																<p>Stock:<span>20</span></p>
																<div class="make-visible">
																	<input type="checkbox" name="makeitvisible6" id="makeitvisible6" value="1" class="check" />
																	<label for="makeitvisible6"></label>
																	<span>Make it visible for all users</span>
																</div>
															</div>
															<div class="but cleaner">
																<div class="cleaner">
																	<button type="button">View this collection detail</button>
																</div>
																<div class="cleaner">
																	<button type="button">Share this<i class="myicon-share"></i></button>
																	<button type="button">Edit<i class="myicon-edit"></i></button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="pag-seasson cleaner">												
													<div class="pagging cleaner">
														<div class="prev cleaner"><a href="#">prev</a></div>
														<div class="page cleaner"><a href="#" class="active">1</a></div>
														<div class="page cleaner"><a href="#">2</a></div>
														<div class="page cleaner"><a href="#">3</a></div>
														<div class="page cleaner"><a href="#">4</a></div>
														<div class="page cleaner"><a href="#">5</a></div>
														<div class="next cleaner"><a href="#">next</a></div>
													</div>					
												</div>
											</div>					
										</div>
									</div>
								</div>
							</div>
						</div>					
					</div>
					<div class="tabbertab">
						<h2>my orders</h2>
						<p>Tab 3 content.</p>						
					</div>
					<div class="tabbertab">
						<h2>talk to d2b</h2>
						<p>Tab 3 content.</p>
					</div>
				</div>
				<!-- Pop up Delete -->
				<div id="deletecollection" style="display: none;">
					<h4>are you sure?</h4>
					<p>Delete this item or collection</p>
					<a href="#"><button type="button"><i class="myicon-delete"></i>thanks im sure</button></a>
				</div>			
			</article>
		</section>
		<?php include '../privado/includes/footer.php' ;?>
	</div>
	<script src="privado/js/jquery-1.9.1.min.js"></script>  
	<!-- Select 2 bootstrap -->
	<script src="privado/js/bootstrap.js"></script>
	<script src="privado/js/bootstrap-select.js"></script>	
	<script src="privado/js/fancybox.js"></script>
	<!-- Placeholder -->
	<script src="privado/js/placeholder.js"></script>	
	<!--  Inview  -->
	<script src="privado/js/jquery.easing.1.3.js"></script>
	<script src="privado/js/jquery.inview.min.js"></script>
	<script src="privado/js/jquery.transit.js"></script>
	<!--  Bottom slider  -->
	<script src="privado/js/jquery.bxslider.min.js"></script>
	<!-- Auto resize Tezxtarea -->
	<script src="privado/js/jquery.autoresize.textarea.js"></script>
	<!-- Main Menu Designers -->
	<script src="privado/js/tabs.js"></script>
	<!-- Menu in two columns(myprofile-options) -->
	<script src="privado/js/infogrid.js"></script>
	<!-- Validate Inputs -->
	<script src="privado/js/jquery.validate.js"></script>
	<!-- Multi tags -->
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>	
	<script src="privado/js/jquery.tag.it.min.js"></script>
	<!-- My apps -->		
	<script src="privado/js/app.js"></script>
	<script src="privado/js/app.designers.js"></script>		
</body>
</html>