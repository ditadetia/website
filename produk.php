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
<link rel="shortcut icon" href="images/favicon.png">
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h1><a href="index.html"><img src="images/favicon.png" width="80px" height="80px" alt=" " class="img-responsive" style="margin-top:20px" /></a></h1>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
 						<li class="active"><a href="produk.php">Product</a></li>
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
	<!--practice-->
	<div class="practice">
		<div class="container">
			<div class="col-md-3 practice-left">
				<ul>
					<li style="margin-top:108px"><a href="produk.php"><span></span>Product</a></li>
					<li class="active"><a href="jasa.php"><span></span>Service</a></li>
				</ul>
		</div>
		<div class="col-md-8 practice-right">
			<center><h3 style="background:green; color:white;">Produk</h3></center>
		<div class="row"></div>
			<div class="about1-bottom1">
      <?php
      include "config.php";
      ?>
      <?php
      $halaman 	= 6;
      $page			= isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai 		= ($page>1) ? ($page * $halaman) - $halaman : 0;
      $sql 			= $conn->query("SELECT * FROM service");
      $data 		= $sql->num_rows;
      $pages 		= ceil($data/$halaman);
      $id				= $data['id'];
      $sql 			= $conn->query("SELECT * FROM service ORDER BY id LIMIT $mulai, $halaman")or die(mysql_error);
			if($sql->num_rows > 0) {
				$no = $mulai+1;
        	while ($data = $sql->fetch_array()) {
        	$id					= $data['id'];
        	$judul			= $data['judul'];
        	$isi    		= $data['isi'];
        	$gambar 		= $data['gambar'];
        	$namafolder = "ADMIN/gambar/";
        		echo "<div class='col-md-6 about1-bottom1'><span><center><img src='ADMIN/gambar/$gambar' width='300' height='300'></center></span>
        					<a><center>$judul</center></a>";
        		echo "<br/>";?>
        					</div>
      <?php
					}
				} else {
	        	echo '<div class="alert alert-warning">No news.</div>';
	      	}
      ?>
			</div>
		</div>
</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
<!--practice-end-->
<!-- footer-starts -->
<div class="footer">
	<div class="container">
		<div class="col-md-4 contact-left">
		<?php
		include "config.php";
		$sql			= $conn->query("SELECT * FROM footer WHERE kategori='Address'");
		$data			= $sql->fetch_array();
		$id				= $data['id'];
		$kategori	= $data['kategori'];
		$isi			= $data['isi'];
		$gambar 		= $data['icon'];
		?>
			<h4><?php echo $kategori ?></h4>
			<div class="col-md-2">
				<img src='images/lokasi.png'/>
			</div>
			<div class="col-md-10">
				<p><?php echo $isi ?></p>
			</div>
		</div>
		<div class="col-md-4 contact-left">
		<?php
		include "config.php";
		$sql			= $conn->query("SELECT * FROM footer WHERE kategori='Contact'");
		$data			= $sql->fetch_array();
		$id				= $data['id'];
		$kategori	= $data['kategori'];
		$isi			= $data['isi'];
		?>
			<h4><?php echo $kategori ?></h4>
			<div class="col-md-2">
				<img src='images/phone.png'/>
				<img src='images/wa.png' width="32" height="32"/>
			</div>
			<div class="col-md-10">
				<p><?php echo $isi ?></p>
			</div>
		</div>
		<div class="col-md-4 contact-left">
		<?php
		include "config.php";
		$sql			= $conn->query("SELECT * FROM footer WHERE kategori='Social Media'");
		$data			= $sql->fetch_array();
		$id				= $data['id'];
		$kategori	= $data['kategori'];
		$isi			= $data['isi'];
		?>
			<h4><?php echo $kategori ?></h4>
			<div class="col-md-2">
				<img src='images/ig.png'/>
				<img src='images/fb.png' style="margin-top:5px;"/>
				<img src='images/gmail.png' style="margin-top:10px;" />
			</div>
			<div class="col-md-10">
				<p><?php echo $isi ?></p>
			</div>
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
