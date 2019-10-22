
<?php
error_reporting(0);
//membuat koneksi ke database
include "../config.php";
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
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
			<div class="navbar-collapse">
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
			<div class="header">
		</div>
	</div>
	<!-- //header-ends -->
	<!-- main content start-->
	<div id="page-wrapper">
		<div class="main-page">
			<div class="panel-head">
				<ol class="breadcrumb">
					<li><a href="admin.php">Home</a></li>
					<li class="active">Inbox</li>
				</ol>
			</div>
			<div class="col-md-12">
			<?php
			include "../config.php";
			$sql = $conn->query("SELECT * FROM pesan");
			if($sql->num_rows > 0) {
				$no = 1;
					while($data = $sql->fetch_array()) {
					$id						= $data['id'];
					$nama					= $data['nama'];
					$message    	= $data['message'];
			?>
			<div class="grid_3 widget-shadow">
				<table class="table">
					<tr>
						<th>FROM:</th>
						<td style="float:right;">
							<form action = "hapus_pesan.php" method = "GET">
								<input type = "hidden" name = "id" value = "<?php echo $data['id']; ?>">
								<input type = "submit" name = "hapus" value = "Delete Message" class = "delete">
							</form>
						</td>
					</tr>
					<tr>
						<td><?php echo $data['nama']; ?></td>
					</tr>
					<tr>
						<th>MESSAGE:</th>
					</tr>
					<tr>
						<td><?php echo $data['message']; ?></td>
					</tr>
				</table>
			</div>
			<br>
			<?php
					$no++;
					}
			}
			?>
		</div>
	</div>
	<div class="clearfix"> </div>
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
