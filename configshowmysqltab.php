<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<img src="index.jpeg"  float:right>
<hr>
<body>

<table>
        // else {echo 'No data';}
 <tr>
  <th>id</th>
  <th>username</th>
  <th>password</th>
 </tr>

<?php


// to change when we have another server user password or dbname

if($_POST) {

$dbservername = "localhost";
$dbusername = "newuser";
$dbpassword = "password";

$dbname = "drinkspot";


// connect to mysql as below
    $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);
   // $username=$_POST['username'];
   // $password=$_POST['password'];
    $sql = "select id, username, password from resto";
    $result = $conn-> query->($sql);

  // $result=mysqli_query($conn,$query);
     if($result -> num_rows > 0) 

        

        {  
          while($row = $result-> fetch_assoc()){
      echo "<tr><td>" . $row ["id"] . "</td><td>" . $row["username"] . "</td><td>" .  $row ["password"] . </td></tr>;
         }
       echo </table>;
}

       else { echo "No data";}



?>




</html>
