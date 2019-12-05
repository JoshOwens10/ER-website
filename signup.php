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
	<h1> Signup </h1>
	<?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>

	<form action ="includes/signup.inc.php" method="post">
		<input type=" text" name = "uid" placeholder="Username">
		<input type=" text" name = "mail" placeholder="E-mail">
		<input type=" password" name = "pwd" placeholder="password">
		<input type=" password" name = "pwd-repeat" placeholder="Repeat password">

		<button type ="submit" name ="signup-submit"> Signup </button>



	</form>
</main>


<?php

require "footer.php";
?>