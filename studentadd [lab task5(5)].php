<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="surname">BuyingPrice:</label><br>
  <input type="number" id="surname" name="surname"><br>
  <label for="username">SellingPrice:</label><br>
  <input type="number" id="username" name="username"><br>
  
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>