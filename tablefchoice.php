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

//    echo "Connected successfully";


     $username=$_POST['username'];
     $password=$_POST['password'];


    $sql = "INSERT INTO eatyprize (fname,Uprize,Qty,Total) VALUES ('$username', '$password', '?', '?')";
    if (mysqli_query($conn, $sql)) {
          echo "    ...$username New record created successfully";



    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
   




?>


<form method="POST" action"configeatybest.php" > 

  Username: <input type="text"  name="username"  placeholder="username"><br>
  Password: <input type="password"  name="password"  placeholder="password"><br>
   <input type="submit">


