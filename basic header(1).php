<header>
	<a href='public_home.php'><h1>A COMPANY</h1></a><br><br>
<?php

if (empty($_SESSION['username'])) {
	echo "<div style='float: right';><a href='public_home.php'>Home</a> |";
	echo "<a href='login.php'>Login</a> |";
	echo "<a href='registration.php'>Registration</a> </div><br><br><br><br><hr>";}
else{
	echo "<div style='float: right';>"." Logged in as <a href='profile.php'>".$_SESSION['username']."</a> | ";
	echo "<a href='logout.php'>Logout</a><br>";
	echo "</div><br><br><br><br><hr>";}
?></header>