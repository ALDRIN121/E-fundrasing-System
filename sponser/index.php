<?php

session_start();

$host ="localhost";
 $user = "root";
 $password ="";
 $db ="project";

 $con = mysqli_connect($host,$user,$password,$db);

 $sql = 'SELECT * FROM request';

 mysqli_select_db($con, $db);
 $query = mysqli_query($con, $sql);
 $number = 1;
 $name = array();
 $reason = array();
 $amount = array();
 $id = array();
 while ($result = mysqli_fetch_array($query)) { 


	$name[] = $result['uname'];
	$reason[] = $result['reason'];
	$amount[] = $result['amount'];
	$id[] = $result['ID'];
  

 	}


?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Selection</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="../organspon/index.html" class="logo">
									<h1><span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">SPONSER ORGAN OR BLOOD</span>
								</h1></a>

							<!-- Nav -->
								

						</div>
					</header>

				<!-- Menu -->
					

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h3>Please select which request<br />
								you can help with.</h3>
								<p>Bounty always receives part of its value from the manner in which it is bestowed.</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<?php echo"<a href='test.php?id={$id[0]}'>
										<h2> $name[0]</h2>
										<div class='content'>
											<p> needs   Rs$amount[0] reason   $reason[0]</p>
										</div>
									</a>" ;
									?>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<?php echo"<a href='test.php?id={$id[1]}'>
										<h2> $name[1]</h2>
										<div class='content'>
											<p> needs   Rs$amount[1] reason   $reason[1]</p>
										</div>
									</a>" ;
									?>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<?php echo"<a href='test.php?id={$id[2]}'>
										<h2> $name[2]</h2>
										<div class='content'>
											<p> needs   Rs$amount[2] reason   $reason[2]</p>
										</div>
									</a>" ;
									?>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<?php echo"<a href='test.php?id={$id[3]}'>
										<h2> $name[3]</h2>
										<div class='content'>
											<p> needs   Rs$amount[3] reason   $reason[3]</p>
										</div>
									</a>" ;
									?>
									</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<?php echo"<a href='test.php?id={$id[4]}'>
										<h2> $name[4]</h2>
										<div class='content'>
											<p> needs   Rs$amount[4] reason   $reason[4]</p>
										</div>
									</a>" ;
									?>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<?php echo"<a href='test.php?id={$id[5]}'>
										<h2> $name[5]</h2>
										<div class='content'>
											<p> needs   Rs$amount[5] reason   $reason[5]</p>
										</div>
									</a>" ;
									?>
								</article>
								
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li> For any queries</li><li>Click <a href="#">here</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
	 		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>