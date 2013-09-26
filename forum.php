<!doctype html>
<html lang="en">
<head>
	<?php include 'privado/includes/seo.php' ;?>	
	<link rel="stylesheet" href="privado/css/jquery.bxslider.css">
	<link rel="stylesheet" href="privado/css/forum.css">
	<link rel="stylesheet" href="privado/css/tagit.css">
	<!-- RichTezt -->
	<link href="privado/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">	
	<link href="http://mindmup.github.io/bootstrap-wysiwyg/index.css" rel="stylesheet">		
	<title>Forum - D2B</title>
</head>
<body>
	<div id="forum" class="estructura logged">
		<?php include 'privado/includes/header2.php' ;?>
		<section id="cuerpo" class="cleaner">
			<article class="main cleaner">
				<div class="cleaner maintitulo"><h2>forum</h2></div>
				<div class="search cleaner">
					<form action="#" name="frmBuscar">
						<input type="text" name="buscar" id="buscar" placeholder="search a theme">
						<button type="submit"><i class="myicon-buscar"></i></button>
					</form>
				</div>
			</article>
			<article class="forum-menu cleaner">
				<p>The colection name. (250 worLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
				<div class="buts cleaner">
					<div class="cleaner"><button id="cat-all" type="button" class="foruminside butforum"><i class="myicon-for-all"></i>All discutions</button></div>
					<div class="cleaner">
						<button id="menucategories" type="button" class="foruminside butforum"><i class="myicon-for-categ"></i>Categories<i class="myicon-arrow-1"></i></button>
					</div>
					<div class="cleaner"><button id="cat-more" type="button" class="foruminside butforum"><i class="myicon-for-more"></i>More comment</button></div>
					<div class="cleaner"><button id="cat-discution" type="button" class="foruminside butforum"><i class="myicon-for-discu"></i>In discutions</button></div>
					<div class="cleaner"><button id="btn-create-theme" type="button" class="butforum"><i class="myicon-for-create"></i>Create a theme</button></div>
				</div>				
				<div class="listcategories cleaner animated">
					<div class="colum cleaner">
						<div class="row cleaner">
							<button class="cat-info" type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button class="cat-info" type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button class="cat-info" type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
					</div>
					<div class="colum cleaner">
						<div class="row cleaner">
							<button class="cat-info" type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button class="cat-info" type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button class="cat-info" type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
					</div>
					<div class="colum cleaner">
						<div class="row cleaner">
							<button type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
					</div>
					<div class="colum cleaner">
						<div class="row cleaner">
							<button type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
						<div class="row cleaner">
							<button type="button">Lorem ipsumem <em>30</em><i class="myicon-for-listcategories"></i></button>
						</div>
					</div>
					<div class="close cleaner">
						<button type="button">close <i class="myicon-arrow-2"></i></button>
					</div>
				</div>				
			</article>
			<article id="createtheme" class="cleaner">
				<div class="cleaner">
					<form action="" id="frm-newtheme" name="">
						<div class="cleaner">
							<div class="date cleaner">
								<i class="myicon-for-calendar"></i>
								<script type="text/javascript">
									var fecha = new Date();
									var month=new Array();
										month[0]="January";month[1]="February";month[2]="March";month[3]="April";month[4]="May";month[5]="June";month[6]="July";month[7]="August";month[8]="September";month[9]="October";month[10]="November";month[11]="December";
										document.write('<em>'+month[fecha.getMonth()]+' '+fecha.getDay()+' , ' + fecha.getFullYear()+' at '+ fecha.getHours()+':'+fecha.getMinutes()+ '</em>');
								</script>
							</div>
						</div>
						<div class="row cleaner">
							<div class="cleaner"><label for="title">Discution title:</label></div>
							<div class="cleaner"><input type="text" class="style3" name="title" id="title" placeholder="title"></div>
						</div>
						<div class="row cleaner">
							<div class="cleaner"><label for="category">Category:</label></div>
							<div class="cleaner"><input type="text" class="style3" name="category" id="category" placeholder="category"></div>
						</div>				
						<div class="row cleaner">
							<div class="cleaner"><label for="tags">Tags:</label></div>
							<div class="cleaner"><ul name="tags4search" id="tags4search" class="style3"></ul></div>
						</div>
						<div id="richtext" class="cleaner">							
							<div class="cleaner"><p>Your comment:</p></div>
							<div class="cleaner">
								<!-- Rich text -->
								<div class="container">
									<div id="alerts"></div>
									<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
									<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
									<ul class="dropdown-menu">
									</ul>
									</div>
									<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
									<ul class="dropdown-menu">
									<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
									<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
									<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
									</ul>
									</div>
									<div class="btn-group">
									<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
									<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
									<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
									<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
									</div>
									<div class="btn-group">
									<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
									<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
									<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
									<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
									</div>
									<div class="btn-group">
									<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
									<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
									<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
									<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
									</div>
									<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
									<div class="dropdown-menu input-append">
									<input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
									<button class="btn" type="button">Add</button>
									</div>
									<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

									</div>

									<div class="btn-group">
									<a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
									<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
									</div>
									<div class="btn-group">
									<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
									<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
									</div>
									<input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
									</div>
									<div id="editor">This Example Rich  Text (Optional)</div>									
								</div>
								<!-- end -->
							</div>
							<div class="cleaner posttheme">
								<button type="button" class="butforum post"><i class="myicon-for-post"></i>Post the new theme</button>
							</div>
						</div>
					</form>
				</div>
			</article>
			<article id="forumthemes" class="cleaner">
				<div class="cleaner maintitulo thetooltip">
					<h2>all the themes</h2>
					<div class="cleaner thistooltip">
						<i class="myicon-for-helper"></i>
						<div class="mytooltip3 cleaner">
							<div class="cleaner">
								<p>rate this designer</p>
							</div>
						</div>
					</div>		
				</div>
				<!-- List Themes -->
				<a class="showtheme" href="designers/themedetails.php">
					<div class="cleaner theme animated cat-all cat-info">
						<div class="cleaner">
							<button type="button"><i class="myicon-for-write"></i></button>
						</div>
						<div class="cleaner">
							<em>(Info) Ipsum theme name of the printing and typesetting industry. </em>
							<p>Lorem Ipsum has been the industry's standard dummy text ever since the </p>
							<div class="cleaner socials">
								<div class="cleaner"><p><i class="myicon-for-like"></i>128</p></div>
								<div class="cleaner"><p><i class="myicon-for-view"></i>300</p></div>
								<div class="cleaner"><p><i class="myicon-for-comment"></i>300</p></div>
								<div class="cleaner">
									<button class="butlike" type="button">
										<div class="cleaner"><i class="myicon-heart animated"></i></div>										
									</button>
									<em>Apreciate</em>
								</div>

							</div>
						</div>						
						<div class="cleaner">
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-user2"></i></div>
								<div class="cleaner"><p>By Loren ipsum User name</p></div>
							</div>
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-calendar"></i></div>
								<div class="cleaner"><p>June 18, 2012</p></div>
							</div>
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-tags"></i></div>
								<div class="cleaner"><p>Tags: </p></div>
							</div>
						</div>
					</div>
				</a>
				<a class="showtheme" href="designers/themedetails.php">
					<div class="cleaner theme animated cat-all cat-more">
						<div class="cleaner">
							<button type="button"><i class="myicon-for-write"></i></button>
						</div>
						<div class="cleaner">
							<em>(more) Ipsum theme name of the printing and typesetting industry. </em>
							<p>Lorem Ipsum has been the industry's standard dummy text ever since the </p>
							<div class="cleaner socials">
								<div class="cleaner"><p><i class="myicon-for-like"></i>128</p></div>
								<div class="cleaner"><p><i class="myicon-for-view"></i>300</p></div>
								<div class="cleaner"><p><i class="myicon-for-comment"></i>300</p></div>
								<div class="cleaner">
									<button class="butlike" type="button">
										<div class="cleaner"><i class="myicon-heart animated"></i></div>										
									</button>
									<em>Apreciate</em>
								</div>

							</div>
						</div>						
						<div class="cleaner">
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-user2"></i></div>
								<div class="cleaner"><p>By Loren ipsum User name</p></div>
							</div>
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-calendar"></i></div>
								<div class="cleaner"><p>June 18, 2012</p></div>
							</div>
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-tags"></i></div>
								<div class="cleaner"><p>Tags: </p></div>
							</div>
						</div>
					</div>
				</a>
				<a class="showtheme" href="designers/themedetails.php">
					<div class="cleaner theme animated cat-all cat-discution">
						<div class="cleaner">
							<button type="button"><i class="myicon-for-write"></i></button>
						</div>
						<div class="cleaner">
							<em>(discution) Ipsum theme name of the printing and typesetting industry. </em>
							<p>Lorem Ipsum has been the industry's standard dummy text ever since the </p>
							<div class="cleaner socials">
								<div class="cleaner"><p><i class="myicon-for-like"></i>128</p></div>
								<div class="cleaner"><p><i class="myicon-for-view"></i>300</p></div>
								<div class="cleaner"><p><i class="myicon-for-comment"></i>300</p></div>
								<div class="cleaner">
									<button class="butlike" type="button">
										<div class="cleaner"><i class="myicon-heart animated"></i></div>										
									</button>
									<em>Apreciate</em>
								</div>

							</div>
						</div>						
						<div class="cleaner">
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-user2"></i></div>
								<div class="cleaner"><p>By Loren ipsum User name</p></div>
							</div>
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-calendar"></i></div>
								<div class="cleaner"><p>June 18, 2012</p></div>
							</div>
							<div class="cleaner row">
								<div class="cleaner"><i class="myicon-tags"></i></div>
								<div class="cleaner"><p>Tags: </p></div>
							</div>
						</div>
					</div>
				</a>				
			</article>

			<!-- Theme details -->
			<article id="mainthemedetails" class="cleaner">
				<div class="cleaner themedetails theme1">
					<div class="cleaner nametitle">
						<div class="cleaner subtitulo">
							<h3>6 Common Mistattkes Managing Your Community – Part 1</h3>					
						</div>
					</div>
					<div class="cleaner rate">
						<div class="cleaner"><i class="myicon-user2"></i><span>By Lorem Ipsum username</span></div>
						<div class="cleaner"><i class="myicon-for-calendar"></i><span>June 2012</span></div>
						<div class="cleaner"><i class="myicon-for-like"></i><em>128</em></div>
						<div class="cleaner"><i class="myicon-for-view"></i><em>300</em></div>
						<div class="cleaner"><i class="myicon-for-comment"></i><em>300</em></div>
						<div class="cleaner"><i class="myicon-for-tags"></i><span>Tags: loren ipsu tag</span></div>
					</div>
					<div class="content cleaner text-limited">
						<p>
							If you work in design, you’ve probably run across the cloud a time or two – or at least heard of it. A growing technology that runs software and applicatiotns across a large number of servers, the cloud is accessible to anyone with an internet connection. Its spread, in combination with the rise of mobile technology and the increasing reliability of browser connections, makes the cloud all the more likely to soon become an integral part of any designer’s process. To some it seems like a farfetched aspiration, but it’s probable that someday the cloud will be all we’re using, and that projects will be able to be instantaneously stored, shared, or edited by anyone, at any time and anywhere. It’s a complex topic with a lot of misconceptions floating around about it, so refer to a cloud computing guide for a more thorough introduction on its use as a whole.
						</p>
					</div>
					<div class="buts cleaner">
						<div class="cleaner"><button type="button" class="butforum">Be part of discustion</button></div>
						<div class="cleaner"><button type="button" class="butforum apreciate">
							<span>Apreciate</span>
							<span class="butlike"><div class="cleaner"><i class="myicon-heart animated"></i></div></span>
						</button></div>						
					</div>
					<div class="listcomments cleaner">
						<div class="comment cleaner">
							<div class="cleaner rate">
								<div class="cleaner"><i class="myicon-user2"></i><span>By Lorem Ipsum username</span></div>
								<div class="cleaner"><i class="myicon-for-calendar"></i><span>June 2012</span></div>							
							</div>
							<div class="content cleaner text-limited">
								<p>To some it seems like a farfetched aspiration, but it’s probable that someday the cloud will be all we’re using, and that projects will be able to be instantaneously stored, shared, or edited by anyone, at any time and anywhere. It’s a complex topic with a lot of misconceptions floating around about it, so refer to a cloud computing guide for a more thorough introduction on its use as a whole.</p>
								<ul class="cleaner mylist">									
									<li>Google’s suite of services (Gmail, Drive, App Engine for site hosting, etc.)</li>
									<li>Dropbox (storage and sharing)</li>
									<li>Amazon Web Services ( CloudFront for content delivery, Fulfillment Service for ecommerce, etc.)</li>
									<li>Basecamp (project coordination)</li>
								</ul>
							</div>
						</div>
						<div class="comment cleaner">
							<div class="cleaner rate">
								<div class="cleaner"><i class="myicon-user2"></i><span>By Lorem Ipsum username</span></div>
								<div class="cleaner"><i class="myicon-for-calendar"></i><span>June 2012</span></div>							
							</div>
							<div class="content cleaner text-limited">
								<p>If you work in design, you’ve probably run across the cloud a time or two – or at least heard of it. A growing technology that runs  software and applicatiotns across a large number of servers, the cloud is accessible to anyone with an internet connection. Its spread, in combination with the rise of mobile technology and the increasing reliability of browser connections, makes the cloud all the more likely to soon become an integral part of any designer’s process. To some it seems like a farfetched aspiration, but it’s probable that someday the cloud will be all we’re using, and that projects will be able to be instantaneously stored, shared, or edited by anyone, at any time and anywhere. It’s a complex topic with a lot of misconceptions floating around about it, so refer to a cloud computing guide for a more thorough introduction on its use as a whole.</p>
							</div>
						</div>
						<div class="comment cleaner">
							<div class="cleaner rate">
								<div class="cleaner"><i class="myicon-user2"></i><span>By Lorem Ipsum username</span></div>
								<div class="cleaner"><i class="myicon-for-calendar"></i><span>June 2012</span></div>							
							</div>
							<div class="content cleaner text-limited">
								<p>If you work in design, you’ve probably run across the cloud a time or two – or at least heard of it. A growing technology that runs  software and applicatiotns across a large number of servers, the cloud is accessible to anyone with an internet connection. Its spread, in combination with the rise of mobile technology and the increasing reliability of browser connections, makes the cloud all the more likely to soon become an integral part of any designer’s process. To some it seems like a farfetched aspiration, but it’s probable that someday the cloud will be all we’re using, and that projects will be able to be instantaneously stored, shared, or edited by anyone, at any time and anywhere. It’s a complex topic with a lot of misconceptions floating around about it, so refer to a cloud computing guide for a more thorough introduction on its use as a whole.</p>
							</div>
						</div>					
					</div>
				</div>	
			</article>

			<!-- paginator themes -->
			<article id="paginator" class="cleaner">
				<div class="pag-seasson  cleaner">												
					<div class="pagging left cleaner">
						<div class="prev cleaner"><a href="#">prev</a></div>
						<div class="page cleaner"><a href="#" class="active">1</a></div>
						<div class="page cleaner"><a href="#">2</a></div>
						<div class="page cleaner"><a href="#">3</a></div>
						<div class="page cleaner"><a href="#">4</a></div>
						<div class="page cleaner"><a href="#">5</a></div>
						<div class="next cleaner"><a href="#">next</a></div>
					</div>					
				</div>
			</article>
			
			<!-- Be part of discution -->
			<article id="bepartdiscution" class="cleaner">
				<div class="titu cleaner">
					<h3>Be part of this discution</h3>
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
					<form action="" id="frm-post">
						<div class="cleaner box-post">
							<div id="avatar" class="cleaner">
								<img src="privado/imagenes/general/avatar.jpg" alt="avatar">
							</div>
							<div id="comment" class="cleaner">
								<div class="cleaner">
									<div class="cleaner">
										<h5><i class="myicon-user2"></i>YAN Bernier</h5>
									</div>
									<div class="date cleaner">
										<i class="myicon-for-calendar"></i>
										<script type="text/javascript">
											var fecha = new Date();
											var month=new Array();
												month[0]="January";month[1]="February";month[2]="March";month[3]="April";month[4]="May";month[5]="June";month[6]="July";month[7]="August";month[8]="September";month[9]="October";month[10]="November";month[11]="December";
												document.write('<em>'+month[fecha.getMonth()]+' '+fecha.getDay()+' , ' + fecha.getFullYear()+' at '+ fecha.getHours()+':'+fecha.getMinutes()+ ' am</em>');
										</script>
									</div>
								</div>
								<div class="cleaner">
									<textarea class="style3" name="newpost" id="newpost" placeholder="Your comment here"></textarea>
								</div>
							</div>							
						</div>
						<div class="cleaner box-post nologged">
							<div id="avatar" class="cleaner">
								<img src="privado/imagenes/general/avatar.jpg" alt="avatar">
							</div>
							<div id="comment" class="cleaner">
								<div class="cleaner">
									<div class="cleaner">
										<h5><i class="myicon-user2"></i>YAN Bernier</h5>
									</div>
									<div class="date cleaner">
										<i class="myicon-for-calendar"></i>
										<script type="text/javascript">
											var fecha = new Date();
											var month=new Array();
												month[0]="January";month[1]="February";month[2]="March";month[3]="April";month[4]="May";month[5]="June";month[6]="July";month[7]="August";month[8]="September";month[9]="October";month[10]="November";month[11]="December";
												document.write('<em>'+month[fecha.getMonth()]+' '+fecha.getDay()+' , ' + fecha.getFullYear()+' at '+ fecha.getHours()+':'+fecha.getMinutes()+ ' am</em>');
										</script>
									</div>
								</div>
								<div class="cleaner">
									<textarea class="style3" name="newpost" id="newpost" placeholder="Your comment here"></textarea>
								</div>
							</div>							
						</div>
						<div class="cleaner posttheme">
							<button type="button" class="butforum post"><i class="myicon-for-post"></i>Post my reply</button>
						</div>
					</form>
				</div>
			</article>
		</section>
		
		<?php include 'privado/includes/footer.php' ;?>
	</div>	
	<script src="privado/js/jquery-1.9.1.min.js"></script>
	<!--  Select 2 bootstrap  -->
	<script src="privado/js/bootstrap.js"></script>
	<script src="privado/js/bootstrap-select.js"></script>	
	<!-- Validate Inputs -->
	<script src="privado/js/jquery.validate.js"></script>
	<!-- Multi tags -->
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>	
	<script src="privado/js/jquery.tag.it.min.js"></script>
	<!--  My apps  -->
	<script src="privado/js/app.js"></script>
	<script src="privado/js/app.forum.js"></script>
	
	<!-- About Rich text -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="http://mindmup.github.io/bootstrap-wysiwyg/external/jquery.hotkeys.js"></script>
	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://mindmup.github.io/bootstrap-wysiwyg/bootstrap-wysiwyg.js"></script>
	<script>
		$(function(){
		function initToolbarBootstrapBindings() {
		  var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
		        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
		        'Times New Roman', 'Verdana'],
		        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
		  $.each(fonts, function (idx, fontName) {
		      fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
		  });
		  $('a[title]').tooltip({container:'body'});
			$('.dropdown-menu input').click(function() {return false;})
			    .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
		    .keydown('esc', function () {this.value='';$(this).change();});

		  $('[data-role=magic-overlay]').each(function () { 
		    var overlay = $(this), target = $(overlay.data('target')); 
		    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
		  });
		  if ("onwebkitspeechchange"  in document.createElement("input")) {
		    var editorOffset = $('#editor').offset();
		    $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
		  } else {
		    $('#voiceBtn').hide();
		  }
		};
		function showErrorAlert (reason, detail) {
			var msg='';
			if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
			else {
				console.log("error uploading file", reason, detail);
			}
			$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
			 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
		};
		initToolbarBootstrapBindings();  
		$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
		window.prettyPrint && prettyPrint();
		});
	</script>
</body>
</html>