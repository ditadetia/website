<!DOCTYPE html>
<html>
<head>
<title>Retech Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Law Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Six+Caps' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="https://fonts.googleapis.com/css?family=Grenze&display=swap" rel="stylesheet"> 
<link rel="shortcut icon" href="images/favicon.png">
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h1><a href="index.php"><img src="images/favicon.png" width="80px" height="80px" alt=" " class="img-responsive" style="margin-top:20px" /></a></h1>
			</div>
			<div class="hea-rgt">
				<a href="login.php">Login</a>
			</div>
			<div class="navigation">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					 	<li class="active"><a href="index.php">Home</a></li>
					 	<li><a href="about.php">About</a></li>
						<li><a href="produk.php">Product</a></li>
						<li class="dropdown" role="presentation">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Article<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="article.php">Article</a>
								</li>
								<li>
									<a href="news.php">News</a>
								</li>
							</ul>
					<!-- /nav-second-level -->
						</li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					</div>
					<!--/.navbar-collapse-->
				</nav>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class="soc">
					<ul>
						<!-- <li>Call us : <span>+(62) 822 5213 3245</span></li> -->
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!-- banner-starts -->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<section class="slider">
					<div class="flexslider">
					<ul class="slides">
						<?php
						include("config.php");
						$id		= $_GET['id'];
						$sql	= $conn->query("SELECT * FROM quote");
						if($sql->num_rows > 0) {
							$no = 1;
								while($data = $sql->fetch_array()) {
						?>
						<li>
						<div class="row">
							<div class="col-xs-12">
								<div class="banner-text" style="width:60%; height:600px; font-size:auto;">
									<h3><?php echo $data['kalimat']; ?></h3>
									<br><br>
								</div>
								<div class="img-responsive">
									<?php echo '<img style="width:100%; height:600px;" src="images/'.$data['nama_image'].'"></center>' ?>
								</div>
							</div>
						</div>
						</li>
						<?php
								}
							}
						?>
					</ul>
				</div>
			</section>
			<!-- FlexSlider -->
			<script defer="" src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(function(){
							});
						$(window).load(function(){
						$('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
										$('body').removeClass('loading');
									}
								});
							});
			</script>
			<!-- FlexSlider -->
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script src="js/jquery.backstretch.min.js"></script>
			<script type="text/javascript">
					$.backstretch(
							[
								"images/1.jpg",
								"images/5.jpg",
							],
							{
									duration: 2000,
									fade: 1000
							});
				</script>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!-- services -->
	<div class="services" style="font-family: 'Grenze', serif;">
		<div class="container">
			<div class="services-head-agileits">
				<h5 class="title-w3">Our Service</h5>
				<p class="title-txt-agile"> </p>
			</div>
			<div class="wthree-agile-sevre-grids">
				<div class="col-md-6 wthree-agile-gridd">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a href="produk.php"  class="hi-icon icon1"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<?php
					include "config.php";
					$sql			= $conn->query("SELECT * FROM wedo WHERE bidang='PRODUK'");
					$data			= $sql->fetch_assoc();
					$id				= $data['id'];
					$bidang		= $data['bidang'];
					$isi			= $data['isi'];
					?>
						<h4><b><?php echo $bidang ?></b></h4>
						<p class="para-agile"style="margin-left:190px"><?php echo $isi ?></p>
				</div>
					<div class="col-md-6 wthree-agile-gridd">
					<a href="jasa.php">
						<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
							<a href="jasa.php"  class="hi-icon icon2"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
						</div>
						<?php
						include "config.php";
						$sql			= $conn->query("SELECT * FROM wedo WHERE bidang='JASA'");
						$data			= $sql->fetch_assoc();
						$id				= $data['id'];
						$bidang		= $data['bidang'];
						$isi			= $data['isi'];
						?>
						<h4><b><?php echo $bidang ?></b></h4>
						<p class="para-agile"><?php echo $isi ?></p>
					</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				</a>
			</div>
		</div>
<!-- //services -->
<div class="services" style="font-family: 'Grenze', serif;">
		<div class="container">
			<div class="services-head-agileits">
				<h5 class="title-w3">Background</h5>
				<p class="title-txt-agile"> </p>
			</div>
			<div class="wthree-agile-sevre-grids" style="background-color:lavender;">
				<div class="col-md-3 wthree-agile-grid">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a  class="hi-icon icon3"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<h4>Waste</h4>
					<p style="align:justify" class="para-agile">Menurut data dari Kementrian Lingkungan Hidup dan Kehutanan dengan Kementrian Perindustrian tahun 2016, jumlah timbulan sampah di Indonesia sudah mencapai 65,2 juta ton pertahun</p>
				</div>
				<div class="col-md-3 wthree-agile-grid">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a  class="hi-icon icon4"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<h4>Recycle</h4>
					<p style="align:justify" class="para-agile">Regulasi dalam menangani permasalahan sampah dan limbah tertuang dalam UU Nomor 18 tahun 2008 tentang pengelolaan sampah dan turunannya, serta Undang-Undang Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup.</p>
				</div>
				<div class="col-md-3 wthree-agile-grid">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a  class="hi-icon icon5"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<h4>Product</h4>
					<p style="align:justify" class="para-agile">Sampah jenis non-organik, diolah menjadi bahan bakar padat (solid fuel) dan bahan baku batako. Sedangkan sampah jenis organik diolah menjadi Pupuk Organik Cair (POC).</p>
				</div>
				<div class="col-md-3 wthree-agile-grid">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a  class="hi-icon icon6"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<h4>Industry</h4>
					<p style="align:justify" class="para-agile">Produk dari HTT diharapkan dapat memenuhi kebutuhan usaha kecil dan menengah, khususnya di bidang energi dan pertanian sehingga meningkatkan pertumbuhan ekonomi dan industri secara khusus di Kabupaten Bengkayang dan secara umum di Provinsi Kalimantan Barat.</p>
				</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
<!-- //services -->
<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="col-md-12">
				<h3 class="agile_head">Partnership</h3>
					<div class="gallery-grids">
						<section>
						<?php
						include("config.php");
						$id = $_GET['id_image'];
						$sql = $conn->query("SELECT * FROM dtimage WHERE kategori='partnership'");
						if($sql->num_rows > 0) {
							$no = 1;
								while($data = $sql->fetch_array()) {
									echo
									'<table style="float:left; margin-bottom:45px;">
									<tr>
									<td align="center">
									<img style="width:150px; height:150px;" src="ADMIN/image/'.$data['nama_image'].'" />
									<td>
									</tr>
									</table>';
						?>
						<?php
									}
							}
						?>
					</section>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-12">
				<h3 class="agile_head">Client</h3>
					<div class="gallery-grids">
						<section>
						<?php
						include("config.php");
						$id = $_GET['id_image'];
						$sql = $conn->query("SELECT * FROM dtimage WHERE kategori='client'");
						if($sql->num_rows > 0) {
							$no = 1;
								while($data = $sql->fetch_array()) {
									echo
									'<table style="float:left; margin-bottom:45px;">
									<tr>
									<td align="center">
									<img style="width:150px; height:150px;" src="ADMIN/image/'.$data['nama_image'].'" />
									<td>
									</tr>
									</table>';
						?>
						<?php
									}
							}
						?>
					</section>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
			</div>
			<div class="col-md-12">
				<h3 class="agile_head">Media Partner</h3>
					<div class="gallery-grids">
						<section>
						<?php
						include("config.php");
						$id = $_GET['id_image'];
						$sql = $conn->query("SELECT * FROM dtimage WHERE kategori='partner'");
						if($sql->num_rows > 0) {
							$no = 1;
								while($data = $sql->fetch_array()) {
									echo
									'<table style="float:left;margin-bottom:45px;" >
									<tr>
									<td align="center">
									<img style="width:150px; height:150px;" src="ADMIN/image/'.$data['nama_image'].'" />
									<td>
									</tr>
									</table>';
						?>
						<?php
									}
							}
						?>
					</section>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
			</div>
		</div>
	</div>
<!-- footer-starts -->
<div class="footer">
	<div class="container">
		<div class="col-md-4 contact-left">
		<?php
		include "config.php";
		$sql			= $conn->query("SELECT * FROM footer WHERE kategori='Address'");
		$data			= $sql->fetch_array();
		$id				= $data['id'];
		$kategori		= $data['kategori'];
		$isi			= $data['isi'];
		$gambar 		= $data['icon'];
		?>
			<h4>Adress</h4>
			<div class="col-xs-2">
				<img src='images/lokasi.png'/>
			</div>
			<div class="col-xs-10">
				<p><?php echo $isi ?></p>
			</div>
		</div>
		<div class="col-md-4 contact-left">
			<h4>Contact</h4>
			<?php
			include "config.php";
			$sql			= $conn->query("SELECT * FROM footer WHERE kategori='Contact'");
			while ($data = $sql->fetch_array()) {
				$id				= $data['id'];
				$kategori		= $data['kategori'];
				$isi			= $data['isi'];
			?>
			<div class="col-xs-2">
				<?php echo '<img src="images/'.$data['gambar'].'"></center>' ?>
			</div>
			<div class="col-xs-10">
				<p><?php echo $isi ?></p>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-4 contact-left">
			<h4>Social Media</h4>
			<?php
			include "config.php";
			$sql			= $conn->query("SELECT * FROM footer WHERE kategori='Social Media'");
			while ($data = $sql->fetch_array()) {
				$id				= $data['id'];
				$kategori		= $data['kategori'];
				$isi			= $data['isi'];
			?>
			<div class="col-xs-2">
				<?php echo '<img src="images/'.$data['gambar'].'"></center>' ?>
			</div>
			<div class="col-xs-10">
				<p><?php echo $isi ?></p>
			</div>
			<?php } ?>
		</div>
		<div class="clearfix"></div>
		<div class="footer-text">
		<hr>
			<p> Retech Solution @ 2019 </p>
		</div>
	</div>
</div>
<!-- footer-end -->
<!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
<!-- Advanced options: -->
<!-- data-align="left" -->
<!-- data-overlay="true" -->
<script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#125e32" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyNjI4MTMyOTA3NjYwNSUyMiwlMjJzbXMlMjI6JTIyNjI4NTY0MDQ4MjYxMCUyMiwlMjJwaG9uZSUyMjolMjI2Mjg1NjQwNDgyNjEwJTIyLCUyMmZhY2Vib29rJTIyOiUyMjI0OTIxNjc1MjY5OTI0OSUyMiwlMjJlbWFpbCUyMjolMjJyZXRlY2hzb2x1dGlvbjE5QGdtYWlsLmNvbSUyMiU3RA=="></script>
</body>
</html>
