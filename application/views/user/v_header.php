<!DOCTYPE HTML>
<html>
<head>
<title>Suka Sepeda Mofidikasi | Home :: w3layouts</title>
<link href="<?php echo base_url('assets/user/') ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url('assets/user/') ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Bikes  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url('assets/user/') ?>js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/user/') ?>css/flexslider.css" type="text/css" media="screen" />

<script src="<?php echo base_url('assets/user/') ?>js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
  </script>
  <script src="<?php echo base_url('assets/user/') ?>js/bootstrap.js"></script>

</head>
<body>
		<!--start-header-section-->
	<div class="header">
		<div class="container">
				<div class="header-top">
					<div class="logo">
						<h1><a href="index.html">Suka Sepeda</a></h1>
					</div>
					<div class="phone">
						<h5><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +6281384466755 </h5>
					</div>
					<div class="clearfix"></div>
				</div>
			<div class="header-bottom">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
        <!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav cl-effect-16">
							<li><a href="<?php echo base_url() ?>">Beranda <span class="sr-only">(current)</span></a></li>
							<li><a href="<?php echo base_url('Index/tentang') ?>">Tentang Kami</a></li>
							<?php

								//mngambil data kategori
								$this->db->order_by('nama_kategory','ASC'); //mengurutkan data secara ascending
								$kategori = $this->db->get('kategori')->result();

							?>
							 <li class="dropdown">
							  <a href="<?php echo base_url(); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suku Cadang<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  	<?php foreach($kategori as $row) {?>
								<li><a href="<?php echo base_url('Index/suku_cadang/').$row->id ?>"><?php echo  $row->nama_kategory ?></a></li>
								<?php } ?>
							  </ul>
							</li>
								<li class="dropdown">
							  <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">galleri<span class="caret"></span></a>
							  <ul class="dropdown-menu">
							  	<?php foreach($kategori as $row) {?>
								<li><a href="<?php echo base_url('Index/galleri/').$row->id ?>"><?php echo $row->nama_kategory ?></a></li>
								<?php } ?>
							  </ul>
							</li>
								<li><a href="<?php echo base_url('Index/tipstrik') ?>">TrikTips</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>
    <!--banner-->

