<html>
<head>
 <style>
body {
  background-image: url("homedeli.jpg");
  background-repeat: no-repeat;
  background-size:cover;
  
  
}
</style> 
</head>

<body>


<?php
$servername = "localhost";
$database = "drinkspot";
$dbusername = "newuser";
$dbpassword = "password";
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $database);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

//    echo "Connected successfully";


$username=$_POST['username'];
$password=$_POST['password'];


$sql = "INSERT INTO eatybest (theusername, thepassword) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
echo " Yes! $username ! New record";


} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

<form method="POST" action"configeatybest.php" >

Username: <input type="text"  name="username"  placeholder="username"><br>
Password: <input type="password"  name="password"  placeholder="password"><br>
<input type="submit">

</form>

<a href ="configeatybest.php"> login </a>

</body>





</html>
