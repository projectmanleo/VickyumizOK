 <?php
    $servername = "localhost";
    $database = "drinkspot";
    $username = "newuser";
    $password = "password";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

   $result= mysqli_query($conn, 'select * from eatyprize');

?>

<table cellpadding="2"  cellspacing="2"  border="2">

 <tr>
     <th> Id </th>
     <th> Fname</th>
     <th> Uprize </th>
     <th> Qty </th>
     <th> Sub Total </th>
  </tr>
