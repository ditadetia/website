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
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
body {
  font-family: "Open Sans", "Arial";
}
a{
  text-decoration: none;
  color: #000;
}
a:hover{
  color: #B7977B;
}
main {
  background: #FFF;
  width: 500px;
  margin: 50px auto;
  padding: 10px 30px 80px;
  box-shadow: 0 3px 5px rgba(0,0,0,0.2);
}
p {
  font-size: 13px;
}
/* Important code */
input, section {
  clear: both;
  padding-top: 10px;
  display: none;
}
label {
  font-weight: bold;
  font-size: 14px;
  display: block;
  float: left;
  padding: 10px 30px;
  border-top: 2px solid transparent;
  border-right: 1px solid transparent;
  border-left: 1px solid transparent;
  border-bottom: 1px solid #DDD;
}
label:hover {
  cursor: pointer;
  text-decoration: underline;
}
#tab1:checked ~ #content1, #tab2:checked ~ #content2, #tab3:checked ~ #content3, #tab4:checked ~ #content4 {
  display: block;
}
input:checked + label {
  border-top-color: #B7977B;
  border-right-color: #DDD;
  border-left-color: #DDD;
  border-bottom-color: transparent;
  text-decoration: none;
}
</style>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h1><a href="index.html"><img src="images/favicon.png" width="80px" height="80px" alt=" " class="img-responsive" /></a></h1>
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
 						<li><a href="produk.php">Product</a></li>
						<li class="active dropdown" role="presentation">
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
<!--resource-->
<div class="resource">
	<div class="container">
		<h7><center>Article</center></h7>
		<div class="header-right">
			<div class="search-bar">
				<form class="navbar-form navbar-right" method="post" action="search.php">
					<input type="text" name="pro_cari" class="form-control" placeholder="Search">
					<input type="submit"  name="search" value="">
				</form>
			</div>
		</div>
		<div class="row"></div>
	   <div class="about1-bottom2">
        <?php
        include "config.php";
        ?>
        <?php
        $halaman = 6;
        $page		= isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai 	= ($page>1) ? ($page * $halaman) - $halaman : 0;
        $sql 		= $conn->query("SELECT * FROM tblartikel");
        $data 	= $sql->num_rows;
        $pages 	= ceil($data/$halaman);
        $id     = $data['id'];
        $sql 	  = $conn->query("SELECT * FROM tblartikel ORDER BY id LIMIT $mulai, $halaman")or die(mysql_error);
        if($sql->num_rows > 0){
          $no =$mulai+1;
            while ($data = $sql->fetch_array()) {
				$id					= $data['id'];
				$judul			= $data['judul'];
				$isi    		= $data['isi'];
				$gambar 		= $data['gambar'];
				$namafolder = "gambar/";
            $namafolder = "../artikel/";
            echo "<div class='col-md-4 about1-bottom1'><a href='articledetail.php?id=$id'></a><span><center><a href='articledetail.php?id=$id'><img src='ADMIN/artikel/$gambar' width='240' height='180'></center></span></a>
            <a href='articledetail.php?id=$id'><center>$judul</center></a>";?>
            <center><a href='articledetail.php?id=$id'><?php echo date('j F Y',strtotime($data['tanggal'])) ?></center></a>
            <?php echo "<br/>";?>
            </div>
        <?php
            }
          } else {
            echo '<div class="alert alert-warning">No article.</div>';
          }
        ?>
			</div>
		</div>
	</div>
	<!--resource-end-->
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
</body>
<!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
<!-- Advanced options: -->
<!-- data-align="left" -->
<!-- data-overlay="true" -->
<script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#125e32" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyNjI4MTMyOTA3NjYwNSUyMiwlMjJzbXMlMjI6JTIyNjI4NTY0MDQ4MjYxMCUyMiwlMjJwaG9uZSUyMjolMjI2Mjg1NjQwNDgyNjEwJTIyLCUyMmZhY2Vib29rJTIyOiUyMjI0OTIxNjc1MjY5OTI0OSUyMiwlMjJlbWFpbCUyMjolMjJyZXRlY2hzb2x1dGlvbjE5QGdtYWlsLmNvbSUyMiU3RA=="></script>
</html>
