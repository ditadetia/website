<?php
error_reporting(0);
//membuat koneksi ke database
include "../config.php";
?>
<?
session_start();
if (!isset($_SESSION[‘username’])){
header('Location:../index.php');
echo "anda berhasil login";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel Retech Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="shortcut icon" href="../images/favicon.png">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
<!--circlechart-->
<script src="js/jquery.circlechart.js"></script>
<!--circlechart-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=c2tyblk9gpgpsk1fcpaz500me900ndnx1iphzv3jlrt43v71"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
        <div class="navbar-collapse">
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="admin.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="profile.php"><i class="fa fa-user nav_icon"></i>Profile</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i>Home<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="about.php">About</a>
								</li>
								<li>
									<a href="quote.php">Quote</a>
								</li>
								<li>
									<a href="wedo.php">Layanan</a>
								</li>
							</ul>
					<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-th-large nav_icon"></i>News<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="artikel.php">Article</a>
								</li>
								<li>
									<a href="news.php">News</a>
								</li>
							</ul>
					<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-th-large nav_icon"></i>Partner<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="partnership.php">Partnership</a>
								</li>
								<li>
									<a href="client.php">Client</a>
								</li>
								<li>
									<a href="partner.php">Media Partner</a>
								</li>
							</ul>
					<!-- /nav-second-level -->
						</li>
						<li>
							<a href="contact.php"><i class="fa fa-table nav_icon"></i>Contact</a>
						</li>
						<li>
							<a href="logout.php"><i class="fa fa-user circle nav_icon"></i>Logout</a>
						</li>
					</ul>
					<!-- //nav-second-level -->
						<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="admin.php">
						<h1>Retech</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
			</div>
			<div class="profile_details">
				<ul>
					<li class="dropdown profile_details_drop">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<div class="profile_img">
								<a href="inbox.php"><i class="fa fa-envelope"></i>   Inbox</a>
							</div>
						</a>
					</li>
				</ul>
			</div>
	</div>
	<!-- //header-ends -->
	<!-- main content start-->
	<div id="page-wrapper">
		<div class="main-page">
			<div class="panel-head">
				<ol class="breadcrumb">
					<li><a href="admin.php">Home</a></li>
					<li class="active">Edit Account</li>
				</ol>
			</div>
			<div class="grid_3 widget-shadow">
			<?php
			include ("../config.php");
			$user		= $_SESSION['user'];
			$id			= $_GET['id'];
			$sql 		= $conn->query("SELECT * FROM user WHERE id='$id'");
			$data 	= $sql->fetch_array();
				$nama 	= $data['nama'];
				$email 	= $data['email'];
				$user 	= $data['username'];
				$pass 	= $data['password'];
			?>
			<?php
			include ("../config.php");
			echo "<form method ='POST' action = 'proses_edit.php'>
						<table	style = 'font-family : arial; widht:100px;'>
						<tr>
							<td> Name </td>
							<td align = 'center' > : </td>
							<td> <input type = 'text  name = 'nama' value= '".$nama."'/> </td>
						</tr>
						<tr>
							<td> E-Mail </td>
							<td align = 'center'> : </td>
							<td> <input type = 'text'  name = 'email' value= '".$email."'/></td>
						</tr>
						<tr>
							<td> Username </td>
							<td align = 'center'> : </td>
							<td> <input type = 'hidden' name = 'id' value = '".$id."'><input type = 'text'  name = 'username' value= '".$user."'/> </td>
						</tr>
						<tr>
							<td> Password </td>
							<td align = 'center'> : </td>
							<td> <input type = 'password'  name = 'password' value= '".$pass."'/> </td>
						</tr>
						</table>
						<br/>
							<input type = 'submit' name = 'submit' value = 'Save Changes'/><br/><br/>
							<a href = 'admin.php'> Kembali </a>
							</form>";
			?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- Classie -->
	<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
