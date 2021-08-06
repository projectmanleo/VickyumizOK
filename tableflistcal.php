


<?php
session_start ();
require 'connect.php';
require 'item.php';
if(isset( $_GET ['id'])  && !isset($_POST['update'])) {

   
  $result= mysqli_query($conn, 'select * from eatyprize where id=' . $_GET ['id'] );
  
 $Foodpro = mysqli_fetch_object($result);
 $item = new item ();
 $item->id = $Foodpro->id;
 $item->Fname = $Foodpro->Fname;
 $item->Uprize = $Foodpro->Uprize;
 $item->Sub Total = $Foodpro->Sub Total;




// Update Qty

if (isset ($_POST['update'])) {


  $arrQty = $_POST['Qty'];


//Below is to validate quantity
  $ valid = 1;
  for ($i = 0; $i<count ($arrQty); $i++)
     if (!is_numeric($arrQty[$i]) || $arrQty[$i] < 1)

 {
     $valid = 0;
   break;
   }

if ($valid==1)(
//   $cart = unserialize (serialize ($_SESSION ['cart'])); 
//for ($i = 0; $i < count ($cart); $i ++) {
//   $cart [$i]->  Qty = $arrQty[$i];
 
  }
$_SESSION ['cart'] = $cart;

}
else 

  $error = Qty is invalid;

}

<?php echo isset($error) ? $error '' ?>
  if ($index == -1)

// $_SESSION  ['cart'] [] = $item;

  else  {

     $cart  [$index] -> Qty ++;
     $_	SESSION ['cart'] = $cart;

    }

}

?>




<table cellpadding="2"  cellspacing="2"  border="2">

 <tr>
     <th> Id </th>
     <th> Fname</th>
     <th> Uprize </th>
     <th> Qty </th>
     <th> Sub Total </th>
  </tr>


