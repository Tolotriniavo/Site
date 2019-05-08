<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(isset($titre)){?>
    <title><?php echo $titre ?></title>
    <?php }else{?>
    <title>sport</title>    
    <?php } ?>
    <!-- Goole Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet"> 

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- Owl carousel -->
    <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">

    <!-- Off Canvas Menu -->
    <link href="<?php echo base_url();?>assets/css/offcanvas.min.css" rel="stylesheet">

    <!--Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<?php if(isset($output)){?>
<?php
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>

<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<?php } ?>

<style type='text/css'>
body
{
font-family: Arial;
font-size: 14px;
}
a {
color: blue;
text-decoration: none;
font-size: 14px;
}
a:hover
{
text-decoration: underline;
}
</style>
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
									<li><a class="page-scroll" href="<?php echo base_url();?>Liste-article.html">ARTICLE</a></li>
									<li><a class="page-scroll" href="<?php echo base_url();?>Liste-categorie.html">CATEGORIE</a></li>
                                                                        <li><a class="page-scroll" href="<?php echo base_url();?>Liste-auteur.html">AUTEUR</a></li>
								</ul>
								<div class="pull-right">
									<a class="page-scroll" href="<?php echo base_url();?>Deconnexion.html">DECONNEXION</a>
								</div>
							</div>
						</div>
					</nav>

				</div><!--row-->
			</div>
			</div><!--header-section-->
<!-- End of header-->
<div style='height:20px;'></div>
<div>
    <?php if(isset($output)){?>
	 <?php echo $output; ?>
    <?php } ?>
</div>
<!-- Beginning footer -->
<!-- End of Footer -->
</body>
</html>
