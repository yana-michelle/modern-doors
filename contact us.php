<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>contact us</title>
<link href="modern doors.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
  		<img src="assets/photos/slide01.png" alt="modern doors" style="width:100%;">
  		<div class="centered"><h1><i>Modern Iron Doors</i></h1></div>
	</div>
	<nav>
		<h2>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="doors.html">Doors</a></li>
				<li><a href="contact us.html">Contact Us</a></li>
				<div class="facebook"> <li><a href="https://www.facebook.com/modernirondoors/"><img src="assets/photos/facebook logo.png" alt="facebook logo"></a></li></div>
			</ul>
		</h2>
	</nav>
	<div class="gridContainerTwo">
		<div class="location">
				<div class="gridText"><h2> 5936 Zangs Dr, San Antonio, TX 78238</h2></div>
		</div>
		<div class="phoneNumber">
				<div class="gridText"><h2>(210) 981-9099</h2></div>
		</div>
		<div class="email">
				<div class="gridText"><h2>info@modernirondoors.com</h2></div>
		</div>
		<div class="hours">
				<div class="gridText"><h2> Monday-Friday: 9:00-17:00<br>Saturday: 10:00-15:00<br>Sunday: Closed<br>Holidays: By Appointment</h2></div>
		</div>
		<div class="emailUs">
			
<form method="post" action="subscriberform.php">
	<h2><i>Name:</i></h2>
	<input type="text" size="50" name="name"><br>
	<h2><i>E-Mail:</i></h2>
	<input type="text" size="50" name="email"><br>
	<h2><i>Phone Number:</i></h2>
	<input type="text" size="50" name="phoneNumber"><br>
	<h2><i>Message:</i></h2>
	<textarea size="50" name="message"></textarea><br>

	<input type="submit">

</form>
		<?php

if($_POST["message"]) {

mail("adrianna.aleman22@outlook.com", "Here is the subject line",

$_POST["insert your message here"]. "From: adrianna.aleman22@outlook.com");

}

?>
	</div>
		</div>
</body>
</html>
