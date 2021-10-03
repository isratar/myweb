!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.err{
			color: red;
		}
    </style>
	
<body>

	<?php
	

	$nameErr = $mailErr = $dateErr = $genderErr = $degreeErr = 
	$bloodgroupErr = "";
	$fname = $mail = $date = $gender = $bloodgroup =  "";
    $degree = array();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["fname"])) {
	    $nameErr = "Name is required";
	  } else {
	    $fname = test_input($_POST["fname"]);
	    
	    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
	      $nameErr = "Only letters and white space allowed";
	    }
	  }

	  if (empty($_POST["mail"])) {
	    $emailErr = "Email is required";
	  } else {
	    $mail = test_input($_POST["mail"]);
	   
	    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	    }
	  }

	  
	if (empty($_POST["date"])) {
 	$dateErr = "Date is required";
 	} else {
 	$date = test_input($_POST["date"]);
 	 
 	 
 	if (!filter_var($date)) {
 	$dateErr = " Cannot be empty.";
 	}
 	}
 	 



	if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	}
    if (empty($_POST["degree"])) {
 	$degreeErr= "Degree is required. you have to select at least two.";
 	}
 	else {
 	foreach ($_POST["degree"] as $key) {
 	array_push($degree, $key);
 	}
 	if(count($degree)<2){
 	$degreeErr = "At least two of them must be selected";
 	}
 	}

 	if (empty($_POST["bloodgroup"])) {
 	$bloodgroupErr = "Blood Group is required";
 	} else {
 	$bloodgroup = test_input($_POST["bloodgroup"]);
 	
 	}
 	 
 

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset>
<legend> <label for="fname">NAME:</label><br></legend>
   
<input type="text" id="fname" name="fname" value=""><span class="err">*

			<?php 
			if (isset($nameErr)) {
				echo $nameErr; 
			}
			?>
		</span><br>
<hr>
</fieldset>





<br><br>

<fieldset>
<legend> <label for="mail">EMAIL:</label><br></legend>
   
<input type="text" id="mail" name="mail" value=""><span class="err">i
		<?php 
			if (isset($emailErr)) {
				echo $emailErr; 
			}
			?>
		</span><br>
<hr> 
</fieldset>
<br><br>

<fieldset>
<legend> <label for="date">DATE OF BIRTH:</label><br></legend>
   
<input type="date" id="birthday" name="date">
<span class="err">*
		<?php 
			if (isset($dateErr)) {
				echo $dateErr; 
			}
			?>
		</span>
<hr>
    
</fieldset>
<br><br>

<fieldset>
<legend> <label for="gender">GENDER:</label><br></legend>
   
 <input type="radio" id="male" name="gender" value="Male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label>
 <input type="radio" id="other" name="gender" value="other">
 <label for="other">Other</label><span class="err">*
		<?php 
			if (isset($genderErr)) {
				echo $genderErr; 
			}
			?>
		</span>
<hr>
    
</fieldset>
<br><br>

    <fieldset>
    <legend> <label for="degree">DEGREE:</label><br></legend>
   
    <input type="checkbox" name="degree[]" value="SSC">
 	<label for="vehicle1"> SSC</label><br>
 	<input type="checkbox" name="degree[]" value="HSC">
 	<label for="vehicle2">HSC</label><br>
 	<input type="checkbox" name="degree[]" value="BSc">
 	<label for="vehicle3">BSC</label><br>
 	<input type="checkbox" name="degree[]" value="MSc">
 	<label for="vehicle3">MSC</label> 

 	<span class="err">* 	<?php 
			if (isset($degreeErr)) {
				echo $degreeErr; 
			}
			?></span>
<hr> 
</fieldset>
<br><br>
<fieldset>
    <legend> <label for="bloodgroup">BLOOD GROUP:</label><br></legend>
   <input list="bloodgroup" name="bloodgroup">
     <datalist id="bloodgroup">
    <option value="A+">
    <option value="A-">
    <option value="B+">
    <option value="B-">
    <option value="AB+">
    <option value="AB-">
    <option value="O+">
     <option value="O-">	
    	

</datalist>
<span class="err">*
		<?php 
			if (isset($bloodgroupErr)) {
				echo $bloodgroupErr; 
			}
			?>
<hr>
<input type="submit"> 
</fieldset>
</form>

<?php 
{
	echo "<h1>Your Input</h1>";
	echo "Name: ".$fname . "<br>";
	echo"Email: ". $mail . "<br>";
	echo "Dath of Birth: " .$date . "<br>";
	echo "Gender: ". $gender . "<br>";
	echo "Degree: ";
 	$arrlength = count($degree);
 	for($x = 0; $x < $arrlength; $x++) {
 	echo $degree[$x]; 
 	echo "<br>";
 	                                   }
	echo "Blood Group :". $bloodgroup . "<br>";}
	 ?>
</body>
</html>