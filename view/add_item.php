<?php

$mysqli = new mysqli('localhost', 'root', '', 'bsp2') or die(mysqli_error($mysqli));

//insert
if(isset($_POST['add_items'])){
$id = $_POST['id'];
//$recivedname = $_POST['recived_items_name'];
$recivedate = $_POST['recived_item_date'];
$reciveamount = $_POST['recived_item_amount'];
$productid = $_POST['productid'];
//$producttag = $_POST['producttag'];
$productname = $_POST['recived_items_name'];
//$reciveamount_ptable = $_POST['Precived_item_amount'];
//$description = $_POST['description'];

 $sql = "UPDATE products SET recived_item_amount = '$reciveamount', recived_item_date = '$recivedate' WHERE id = '$id'";
if($mysqli->query($sql)){
    $_SESSION['success'] = ' add successfully';
}
else{
    $_SESSION['error'] = $mysqli->error;
}

}


else{
$_SESSION['error'] = 'Select  to edit first';
}
//  header('location: stock.php');

 $mysqli->query ("INSERT INTO recive_items (recived_item_date, recived_item_amount,Rproductid,recived_items_name) VALUES ( '$recivedate','$reciveamount','$productid','$productname')") or die
 
($mysqli->error);

 
 
 header('location: stock.php');
?>
<?php
// $mysqli->query("INSERT INTO products(recived_item_amount)VALUE ('$reciveamount')")or die
// ($mysqli->error);

 
 
//  header('location: stock.php');
//  ?>


