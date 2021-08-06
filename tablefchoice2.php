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
  
/** code above correct forms connected MODIFY NOTHING

  <?php while($Food = mysqli_fetch_object($result)) { ?>
  <tr>

      <td><?php echo $Food->Id;  ?></td>
      <td><?php echo $Food->Fname;  ?></td>
      <td><?php echo $Food->Uprize;  ?></td>
      <td><?php echo $Food->Qty;  ?></td>
      <td><?php echo $Food->Sub Total;  ?></td>
 </tr>
<?php } ?>

</table>

*/
