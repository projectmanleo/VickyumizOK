   <?php
   //   $servername = "localhost";
    $database = "drinkspot";
    $username = "newuser";
    $password = "password";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

//    echo "Connected successfully";

print_r($_POST);
     $username=$_POST['username'];
     $password=$_POST['password'];

if ($username != "")
{

  $sql = "INSERT INTO eatybest (theusername, thepassword) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
          echo "    ...$username New record created successfully";



    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
   
}
else  
{


//print ( "form method='POST' action='configeatybest.php' ");
print ( "form method='POST' action='eatybestsignup.php' ");

print ( "Username: <input type='text'  name='username'  placeholder='username'> <br>");
print (" Password: <input type='password'  name='password'  placeholder='password'><br>");
print ("  <input type='submit'>");
 
print ("</form>");



}

?>



<a href ="configeatybest.php"> login </a>

</body>

</html>



