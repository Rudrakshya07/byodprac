<?php 
$conn = mysql_connect("localhost", "horo", "123123")or die("can not connect");
mysql_select_db("byod")or die("can not select database");


$re=$POST['reg'];
$fname= $POST['firstname']; 
$lname=$POST['lastname'];
$email=$POST['email'];
$in= "Insert into students2 values($re,"$fname","$lname","$email")";
if(mysql_query($conn, $in)){
    echo "Records inserted successfully." ;
} else
{
    echo "ERROR: Could not able to execute $sql." 
	
}
mysql_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="results.php" method= post>
    <label for="registration">Registration Number</label>
    <input type="text" id="registration" name="reg" placeholder="example-1164231">
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Email</label>
    <input type="text" id="Email" name="email" placeholder="example- xyz@gmail.com">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
