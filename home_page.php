<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to JustFly
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	</head>
	<body>

		<div>
			<ul>
			    <li><img class="logo" src="images/shutterstock_22.jpg"/></li>
			    <li><h1 id="title"> JUST FLY </h1></li>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>


			<div class="welcome_text text-center">
			  <section class="text-center"><br>Welcome to JustFly</section>
			  <br>

			  <div class=" container row justify-content-around md-auto" id="dialog-box0">
			  <div class="col-3" id="dialog-box">Login <i class='far fa-arrow-alt-circle-right' style='font-size:36px'></i> </div>
			  <div class="col-3" id="dialog-box">select flight<i class='far fa-arrow-alt-circle-right' style='font-size:36px'></i> </div>
			  <div class="col-4" id="dialog-box">Book ticket<i class='fas fa-plane-departure' style='font-size:36px'></i></div>
			  </div>
			</div>
			<img src="images/background-img.png" id="background-img" >



		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	</body>
	<footer class="footer text-center bg-dark text-light">
	Team JUSTFLY For Queries Write us at justfly@gmail.com
	</footer>
</html>
