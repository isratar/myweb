<!DOCTYPE html>
<html>
<head>
<title>K Company</title>
</head>
<body>
	<?php 
session_start();
	echo "<div>";include 'basic/header.php';echo "</div>";
 ?>
	<table style="width:100%; border: 1px solid black;">
  <tr style="border: 1px solid black;">
    <th style="border: 1px solid black;">
    	Account<hr>
    	<div style="float: left; text-align: left;">
    	* <a href="dashboard.php">Dashboard</a><br><br>
    	* <a href="profile.php">View Profile</a><br><br>
    	* <a href=".php">Edit Profile</a><br><br>
    	* <a href=".php">Change Profile Picture</a><br><br>
    	* <a href="changePassword.php">Change Password</a><br><br>
    	* <a href="logout.php">Logout</a>
    </div>
    </th>
    <th style="border: 1px solid black;"><?php
$cpassErr = $npassErr = $rtnpassErr = "";
$cpass = $npass = $rtnpass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cpass"])) {
    $cpassErr = "Current Password is required";
  } else {
    $cpass = test_input($_POST["cpass"]);
  }

  if (empty($_POST["npass"])) {
    $npassErr = "Enter The New Password";
  } else {
    $npass = test_input($_POST["npass"]);
    if (strlen($npass)<8) {
      $npassErr = "Password must be 8 charecters";}
    else if (!preg_match("/[@,#,$,%]/",$npass)) {
      $npassErr = "Password must contain at least one of the special characters (@, #, $,%)";  
    }
    else if (strcmp($cpass, $npass)==0) {
      $npassErr = "New Password should not be same as the Current Password";
    }
  }

  if (empty($_POST["rtnpass"])) {
    $rtnpassErr = "Retype The Current Password";
  } else {
    $rtnpass = test_input($_POST["rtnpass"]);
    if (!strcmp($npass, $rtnpass)==0) {
      $rtnpassErr = "New Password & Retyped Password Dose not Match"; }}}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
<legend><B>CHANGE PASSWORD</B></legend><div style="float: left; text-align: right;">  
  Current Password: <input type="Password" name="cpass">
  <span class="error"> <?php echo $cpassErr;?></span>
  <br><br>
  New Password: <input type="Password" name="npass">
  <span class="error"> <?php echo $npassErr;?></span>
  <br><br>
  Retype New Password: <input type="Password" name="rtnpass">
  <span class="error"> <?php echo $rtnpassErr;?></span>
  <br><hr>
  <input type="submit" name="submit" value="Submit"></div>
</fieldset>
</form></th>
  </tr>
</table>
<div><?php include 'basic/footer.php';?></div>
</body>
</html>