<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<div class="sticky">
<div class="header">
 <h2>Course Serch Form</h2> 
</div>

<div class="topnav">
<a href="Home.php">Back to Home</a><br>
</div>
</div>


<body>
 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/MyCode/Final/MidMargeProject/Ariful/session/findcoursecheck.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
}
</script>
</head>

<br>

<label>Find details of Course by "Course name" </label><br>
  <input type="text" id="uname" onkeyup="showmyuser()" >
<p id="mytext"></p>

<h4><p id="para1">Course Information Table</p></h4>
<?php
include('../session/cdb.php');
$connection = new cdb();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"Courses");  
echo "<table border='1'> <tr><th>id</th><th>cname</th> <th>cid</th></tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['cname'] . "</td>";
    echo "<td>" . $row['cid'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    }
    ?>  




<div class="footer">
<p>Footer</p>
</div>

</body>
</html>


