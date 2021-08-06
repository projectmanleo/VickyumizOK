<?php
session_start ();
require 'connect.php';
require 'item.php';

// save new command

mysqli_query($conn, 'insert into item (id, fname, Uprize) values ("neworderid", "?" , "Uprize"');
$itemcmdId = mysqli_insert_id($conn);

//echo 
 // 'insert into item (id, fname, Uprize) values ("neworderid", "?" , "Uprize"');

// make new itemcmd


$cart = unserialize (serialize ($_SESSION ['cart']));

  for ( $i = 0 $i<count ($cart); $i++) {
   mysqli_query($conn, 'insert into item (id, fname, Uprize) values ('.$cart[$i]->id.', '$cart[$i]-> fname.' , '.$cart[$i]->Uprize.');

}


//clear all itemcmdId in cart

unset ($_SESSION['cart']);



?>
