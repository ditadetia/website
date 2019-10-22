<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
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
<script type="text/javascript">
	function validasi() {
		if(document.formLogin.username.value == "")
	   {
		 alert( "MASUKKAN NAMA ANDA!" );
		 document.formLogin.username.focus() ;
		 return false;
	   }

	   if(document.formLogin.password.value == "")
	   {
		 alert( "MASUKKAN PASSWORD ANDA!" );
		 document.formLogin.password.focus() ;
		 return false;
	   }
	}
</script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			
				<h1><a href="index.php"><img src="images/favicon.png" alt="" class="img-responsive" style="margin-left :auto; margin-right:auto; block" height="300" width="300"/></a></h1>
			<div class="clearfix"></div>
		</div>
	</div>
<!--header-top-end-->
<!--start-header-->
  <div class="container">
    <!-- script-for-menu -->
		<div class="container container-body">
    	<div class="row">
				<h1><center>Admin</center></h1>
				<br>
      		<div class="col-md-6 col-md-offset-2">
      		<?php
      		include ("config.php");
					$user   = $conn->real_escape_string($_POST['username']);
					$pass   = $conn->real_escape_string($_POST['password']);
					if($_POST['login']) {
						if ($user == "" || $pass == "") {
						} else {
							$sql  = $conn->query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
							$data = $sql->fetch_array();
							$cek 	= $sql->num_rows;
							if($cek == 0) {
					?>
					<script type="text/javascript"> alert ("USERNAME/PASSWORD SALAH ");</script>
					<?php
					} else {
						$_SESSION['user'] = $user;
						header('location: ADMIN/admin.php');
							}
						}
					}
      		?>
      		<form class="form-horizontal" method="post" name="formLogin" onsubmit="return(validasi());">
        		<div class="form-group">
          		<label class="col-md-4 control-label">Username</label>
            		<div class="col-md-8">
              	<input type="text" name="username" class="form-control" placeholder="username">
            		</div>
        		</div>
        		<div class="form-group">
          		<label class="col-md-4 control-label">Password</label>
            		<div class="col-md-8">
              	<input type="password" name="password" class="form-control" placeholder="password">
            		</div>
        		</div>
        		<div class="form-group">
          		<label class="col-md-4 control-label">&nbsp;</label>
            		<div class="col-md-8">
              	<input type="submit" name="login" class="btn btn-primary" value="Login">
            		</div>
        		</div>
      		</form>
    		</div>
  		</div>
		</div>
		<!-- script-for-menu -->
    <script>
    $("span.menu").click(function(){
      $(" ul.navig").slideToggle("slow" , function(){
      });
    });
    </script>
    <!-- script-for-menu -->
  </div>
	<!--footer-->
	<p style="float:right; margin-top:300px; margin-right:50px;"> Retech Solution @ 2019 </p>
	<!--//footer-->
</body>
</html>
