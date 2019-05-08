<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(isset($titre)){?>
    <title><?php echo $titre ?></title>
    <?php }else{?>
    <title>ACCUEIL</title>    
    <?php } ?>
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet"> 

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">



    <!--Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">

	<!-- Header Section -->
	<header>
		<div class="container">
			<div class="top_ber">
				<div class="row">
					<div class="col-md-6">
						<div class="top_ber_left">
							<?php 
                                                        date_default_timezone_set('Europe/Moscow');
                                                        echo date("r"); ?>
						</div><!--top_ber_left-->
					</div><!--col-md-6-->
					
				</div><!--row-->
			</div><!--top_ber-->

			<div class="header-section">
				<div class="row">
				
				
					<div class="col-md-3">
						<div class="logo">
							<a  href="index.html"><img class="img-responsive"  src="<?php echo base_url(); ?>assets/img/css_sprites.png" style="object-fit: none; object-position: -155px -10px; width: 156px; height: 66px;" alt=""></a>
						</div><!--logo-->
					</div><!--col-md-3-->

					

					
				</div> <!--row-->
			</div><!--header-section-->

			<div class="menu_area">
				<div class="row">

					<nav class="navbar main-menu navbar-inverse navbar-static-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

							</div>
							<div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
								<ul class="nav navbar-nav">
									<li class="hidden"><a href="#page-top"></a></li>
									<li><a class="page-scroll" href="<?php echo base_url();?>acceuil.html">Home</a></li>
									<?php foreach($categorie as $cat ) {?>
										<li><a class="page-scroll" href="<?php echo base_url();?>categorie-<?php echo $cat['idCateg'];?>.html"><?php echo $cat['nomCateg'];?></a></li>
									<?php }?>
								</ul>
								
							</div>
						</div>
					</nav>

				</div><!--row-->
			</div>
		</div><!-- /.container -->
	</header>

	<!-- Feature Category Section & sidebar -->
	<section id="feature_category_section" class="feature_category_section category_page section_wrapper">
	<div class="container">   
		<div class="row">
		   	<div class="col-md-9">
				<div class="row">	

				<?php foreach($article as $art ) {?>
					<div class="col-md-6">
						<div class="feature_news_item">
							<div class="item">
								<div class="item_wrapper">
									<div class="item_img">
										<img class="img-responsive" src="<?php echo base_url();?>assets/img/<?php echo $art['photo'];?>" alt="Chania">
									</div> <!--item_img-->
									<div class="item_title_date">
										<div class="news_item_title">
											<h1><a href="<?php echo base_url();?>single-<?php echo $art['id'];?>.html"><?php echo $art['titre'];?></a></h1>
										</div>
										<div class="item_meta"><a href="<?php echo base_url();?>date-<?php echo $art['dateParution'];?>.html"><?php echo $art['dateParution'];?></a> by:<a href="<?php echo base_url();?>auteur-<?php echo $art['idAuteur'];?>.html"><?php echo $art['nomAuteur'];?></a></div>
									</div><!--item_title_date-->
								</div> <!--item_wrapper-->
								<div class="category_list">
                                        <a href="<?php echo base_url();?>categorie-<?php echo $art['idCategorie'];?>.html"><?php echo $art['nomCateg'];?></a>
                                    </div><!--category_list-->

							</div><!--item-->
						</div><!--feature_news_item-->
					</div><!--col-md-6-->
				<?php }?>		
					
					

												 
				</div><!--row-->	
		   	</div><!--col-md-9-->

			<div class="col-md-3">
					
					

				<div class="ad">
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
				</div><!--ad-->
				
				<div class="ad">
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
					<img class="img-responsive" src="<?php echo base_url();?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -10px; width: 125px; height: 125px;" alt="img" />
				</div><!--ad-->
				
				

				
				
			</div>	   	
</section><!--feature_category_section-->

	<!-- Footer Section -->
	<footer class="footer_section section_wrapper section_wrapper" >
		<div class="footer_top_section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="text_widget footer_widget">
							<div class="footer_widget_title"><h1>About Sports Mag</h1></div>

							<div class="footer_widget_content">Collaborativelyadministrate empowered marketsplug-and-play networks. Dynamic procrastinate after.marketsplug-and-play networks. Dynamic procrastinate users after. Dynamic procrastinateafter. marketsplug-and-play networks. Dynamic procrastinate users after...
							</div>
						</div><!--text_widget-->
					</div><!--col-xs-3-->

					<div class="col-md-6">
						<div class="footer_widget">
							<div class="footer_widget_title"><h1>Discover</h1></div>
							<div class="footer_menu_item ">
								<div class="row">
									<div class="col-sm-4">
										<ul class="nav navbar-nav ">
											<li><a href="../navbar/">Baseball</a></li>
											<li><a href="../navbar-static-top/">Football</a></li>
											<li><a href="./">Cricket</a></li>
											<li><a href="../navbar/">Rugbi</a></li>
											<li><a href="../navbar/">Hockey</a></li>
											<li><a href="../navbar-static-top/">Boxing</a></li>
											<li><a href="./">Golf</a></li>
											<li><a href="../navbar/">Tennis</a></li>
											<li><a href="../navbar/">Horse Racing</a></li>
										</ul>
									</div><!--col-sm-4-->
									<div class="col-sm-4 ">
										<ul class="nav navbar-nav  ">
											<li><a href="../navbar/">Track & Field</a></li>
											<li><a href="../navbar-static-top/">MembershipContact us</a></li>
											<li><a href="./">Newsletter Alerts</a></li>
											<li><a href="../navbar/">Podcast</a></li>
											<li><a href="../navbar/">Blog</a></li>
											<li><a href="../navbar-static-top/">SMS Subscription</a></li>
											<li><a href="./">Advertisement Policy</a></li>
											<li><a href="../navbar/">Jobs</a></li>
										</ul>
									</div><!--col-sm-4-->
									<div class="col-sm-4">
										<ul class="nav navbar-nav ">
											<li><a href="../navbar/">Report technical issue</a></li>
											<li><a href="../navbar-static-top/">Complaints & Corrections</a></li>
											<li><a href="./">Terms & Conditions</a></li>
											<li><a href="../navbar-static-top/">Privacy Policy</a></li>
											<li><a href="./">Cookie Policy</a></li>
											<li><a href="../navbar/">Securedrop</a></li>
											<li><a href="../navbar/">Archives</a></li>
										</ul>
									</div><!--col-sm-4-->
								</div><!--row-->
							</div><!--footer_menu_item-->
						</div><!--footer_widget-->
					</div><!--col-xs-6-->

					<div class="col-md-3">
						<div class="text_widget footer_widget">
							<div class="footer_widget_title"><h1>Editor’s Message</h1></div>
							<img src="<?php echo base_url(); ?>assets/img/css_sprites.png" style="object-fit: none; object-position: -10px -155px; width: 68px; height: 67px;">
							<div class="footer_widget_content">Collaborativelyadministrate empowered marketsplug-and-play networks. Dynamic procrastinate after.marketsplug-and-play networks. Dynamic procrastinate users after. Dynamic procrastinateafter. marketsplug-and-play networks. Dynamic procrastinate users after...</div>
						</div>
					</div><!--col-xs-3-->
				</div><!--row-->
			</div><!--container-->
		</div><!--footer_top_section-->
		<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

		<div class="copyright-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
							Editor: Ralaiarisoa Tolotriniavo Hubert
					</div><!--col-xs-3-->
					<div class="col-md-6">
						<div class="copyright">
						© Copyright 2019 - Design by: <a href="https://uiCookies.com" title="uiCookies">uiCookies</a> - Made by:Tolotra
						</div>
					</div><!--col-xs-6-->
					<div class="col-md-3">
						Sports News Magazine
					</div><!--col-xs-3-->
				</div><!--row-->
			</div><!--container-->
		</div><!--copyright-section-->
	</footer>

</div> <!--main-wrapper-->
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<!-- Owl carousel -->
<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<!-- Theme Script File-->
<script src="<?php echo base_url();?>assets/js/script.js"></script> 

<!-- Off Canvas Menu -->
<script src="<?php echo base_url();?>assets/js/offcanvas.min.js"></script> 
   
</body>
</html>