<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jobs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="ER3.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li> <a href="index.php" class ="active">Jobs </a> </li>
				<li> <a href="CarrerAdvice.php">carrer Advice </a> </li>
				<li> <a href="CompanyProfiles.php">Company Profiles </a> </li>
				<li> <a href="ContactUs.php">Contact us </a> </li>
				<li> <a href="Login.php">Login/Signup </a> </li>
			</ul>
		</nav>
	</div>

</header>

<div id ="jobS">

	<img src ="Aseets/Hero2.jpg" style="width: 100%">

	     <main>
      <div class="wrapper-main">
        <section class="section-default">
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          -->
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged in!</p>';
          }
          ?>
        </section>
      </div>
    </main>

    
	<div class="box" style="border: 1px solid black; height: 100%; width: 100%; background-color: grey;">
		<div class="row"><div class="col-md-4">





			<button type="button" class="btn btn-primary">Apply</button>


			<h1> what we stand for </h1>

			<P> ldweQNDIDNLSANMDLWQNDQDLWQJDDD
				ldweQNDIDNLSANMDLWQNDQDLWQJDDD
				ldweQNDIDNLSANMDLWQNDQDLWQJDDD
				ldweQNDIDNLSANMDLWQNDQDLWQJDDD
				ldweQNDIDNLSANMDLWQNDQDLWQJDDD
				ldweQNDIDNLSANMDLWQNDQDLWQJDDD
			</P>

		</div>

		<div class="col-md-4">

			<h1>Affordibel</h1>

			<P id="Ezy Jobs ">
				<P> ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
				</P>

			</P>

		</div>

		<div class="col-md-4">
			<h1> Free cv service</h1>

			<P id="Intro2">
				<P> ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
					ldweQNDIDNLSANMDLWQNDQDLWQJDDD
				</P>

			</P>

		</div>









<?php

require "footer.php";
?>



</body>
</html>
