<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Kathmandu');
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>MovieHub</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
	<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src='js/jquery.color-RGBa-patch.js'></script>
	<script src='js/example.js'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="header" style="background-color:black;">
		<div class="header-top" style="background-color:black;">
			<div class="wrap" style="background-color:black;">
				<div class="h-logo">
					<h3 style="color:white;">Movie Hub</h3>
					<a href="index.php">
						<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_yetxuujw.json" background="transparent" speed="0.5" style="width: 200px; height: 100px;" loop autoplay></lottie-player>
					</a>
				</div>
				<div class="nav-wrap" style="background-color:black;">
					<ul class="group" id="example-one">
						<li><a href="admin/index.php">Admin</a></li>
						<li><a href="index.php">Home</a></li>
						<li><a href="movies_events.php">Movies</a></li>
						<li>
							<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_cbrbre30.json" background="transparent" speed="1" style="width: 20px; height: 20px;" loop autoplay></lottie-player>
						</li>
						<li><?php
							if (isset($_SESSION['user'])) {
								$us = mysqli_query($con, "select * from tbl_registration where user_id='" . $_SESSION['user'] . "'");
								$user = mysqli_fetch_array($us);
							?>
								<a href="profile.php"><?php echo $user['name']; ?></a><a href="logout.php">Logout</a><?php } else { ?><a href="login.php">Login</a> <a href="registration.php">Register</a><?php } ?>
						</li>
					</ul>
				</div>
				<div class="clear"></div>

			</div>

		</div>
		<div class="clear" style="background-color:black;"></div>

		<div class="block" style="background-color:black;">
			<div class="wrap" style="background-color:black;">

				<form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
					<fieldset>
						<div class="field">
							<input type="text" placeholder="Enter A Movie Name" style="border:2px solid black;height:35px;width:300px;border-radius: 4px;" required id="search111" name="search">
							&nbsp;&nbsp;
							<input type="submit" value="Search" style="height:35px;padding-top:3px;border-radius:20px;" id="button111">
						</div>

					</fieldset>
				</form>
				<div class="clear"></div>
			</div>
		</div>
		<script>
			function myFunction() {
				if ($('#hero-demo').val() == "") {
					alert("Please enter movie name...");
					return false;
				} else {
					return true;
				}
			}
		</script>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>