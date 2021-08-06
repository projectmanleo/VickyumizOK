<html>
<head>
<img src="index.jpeg"  float:right>

<hr>


 <style>
body {
  background-image: url("shrimp.jpg");
  background-repeat: no-repeat;
  background-size:100%;
  
  
}
</style> 
</head>
<body>




<?php

include_once "menu.php";


session_start();

if (!$_SESSION['username'] || empty($_SESSION['username']))
//if (!$_SESSION['drinkspot'])

{ 

    header('location:configeatybest.php');


 };

echo 'Welcome    '.$_SESSION['username']. ' Wow !!!';



?>



<h1 style="color: green;">  WELCOME TO LINUXEAT !</h1>
<p>This is the technological site for wonders and glory in eating and drinking<p>
<p>Whatever meal or drink, whenever or wherever, Yumiz is always available with Restaurants on call at happy hours<p><br>
<p>This is the technological site for wonders and glory in eating and drinking<p>
<p> You need a great time !<p>
<p> To choose your table option click ...TABLE<p>

<a href="table.php">TABLE</a>
<a href="configeatybest.php">logout...!</a>

</body>
</html>
