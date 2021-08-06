<html>
<body>

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
   $query=select * from eatyprize;
   $result= mysqli_query($conn, $query);
 //while($row = mysqli_fetch_array($result)) {
  //echo ".$row["fname"]" . ".$row["Uprize"]" "<br>";
    
 if ($result = $mysqli_query($query)) {
 
    // fetch associative array 
    while ($row = $result_fetch_assoc()) {
        $1 = $row["id"];
        $Achu = $row["fname"];
       // $field3name = $row["Uprize"];
       // $field4name = $row["Qty"];
       // $field5name = $row["Total"];

    echo  ' <tr>
     <th> Id </th>
     <th> Fname</th>
     <th> Uprize </th>
     <th> Qty </th>
     <th> Total </th>
  </tr>';








    }
 
    // free result set
   // $result->free();
}

   

?>

/*<table cellpadding="2"  cellspacing="2"  border="2">
 <tr>
     <th> Id </th>
     <th> Fname</th>
     <th> Uprize </th>
     <th> Qty </th>
     <th> Total </th>
  </tr>

*/
</body>

</html>
