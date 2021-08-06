<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<img src="index.jpeg"  float:right>
<hr>
 <style>
body {
  background-image: url("chef.jpg");
  background-repeat: no-repeat;
  background-size:cover;
  
  
}
</style> 
</head>

<body>

<?php


// to change when we have another server user password or dbname

if($_POST) {

$dbservername = "localhost";
$dbusername = "newuser";
$dbpassword = "password";

$dbname = "drinkspot";


// connect to mysql as below
    $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query = "select * from eatybest where theusername='$username' and thepassword='$password'";

  // $result=mysqli_query($conn,$query);
     if(mysqli_num_rows(mysqli_query($conn,$query))==1)

        // For signup.php in config.php he instead did= if(mysqli_num_rows(mysqli_query))==1)
        // and he did IF (mysqli_num_rows($result)==1)  FOR THE NORMAL LOGIN ONLY WITHOUT SIGNUP

        {  
          session_start();
        //  $_SESSION[drinkspot]='true';
          $_SESSION['username']=$username;
          header('location:indexeatybest.php');


         }

        else {echo 'wrong username or password';}
}

?>



<h1 style="color:blue;"> Welcome ! Please Login to Linuxeat</h1> 
<form method="POST" >
Username:<br>
<input type="text" name="username"><br>
Password:<br>
<input type="text"  name="password"><br>
<input type="submit"  value= "login"><br>

</form>
<h6 style="color:tomato;"> You don't have an account click :</h6> <button> <a href="eatybestsignup.php"> Create Account</a>
</button>


</body>

</html>
