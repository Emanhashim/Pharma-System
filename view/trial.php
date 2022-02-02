<?php

$active = "salestrial";
include_once './template/header.php';
 
include  "connection.php";

?>


<?php
include ('connection.php');  
if(isset($_GET['search']) && $_GET['search']==""){
    $sql= "SELECT * FROM products";
}
if(isset($_GET['search'])){
    $sql= "SELECT * FROM products WHERE productname like '%$_GET[search]%'";
}else{
    $sql= "SELECT * FROM products";
}

$res= mysqli_query($con,$sql);

?>





<div class="container d-flex justify-content-end mt-3">
    <form class="form-inline" style="width: 400px;  margin-left: 10px; margin-right: 20px; margin-top: 20px;" method="GET" action="trial.php">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input name="search" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
          aria-label="Search">
      </form>
</div>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-lg-3">
  <h2> ADD New Items</h2>
  <form action="" name ="form1" method ="post">
    <div class="form-group">
      
      <input type="text" class="form-control" id="productid" placeholder="ProductId" name="productid">
    </div>
    <div class="form-group">
     
    <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="mkd" required>
    </div>
    <div class="form-group">
      
      <input type="text" class="form-control" id="producttag" placeholder="ProductTag" name="producttag">
    </div>
    <div class="form-group">
    
      <input type="text" class="form-control" id="producname" placeholder="ProductName" name="productname">
    </div>
    <div class="form-group">
    
      <input type="text" class="form-control" id="description" placeholder="Description" name="description">
    </div>
    
    <input type="text" class="form-control" id="amount" placeholder="Received Amount" name="FReceived">
    </br>
     <div class="form-group">
     
    <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="md" required>
    </div>
    </br>
    <div class="form-group">
     
     <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="ed" required>
     </div>
    
    
    
    
    <button type="submit" class="btn btn-primary" name ="insert">Insert</button>
   
  </form>
</div>
</div>




<!-- this one to fetch n display -->
<div class ="col-lg-12">
<table class ="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>ProductId</th>
<th>MKDate</th>
<th>ProductTag</th>
<th>ProductName</th>
<th>Description</th>
<th>FReceived</th>
<th>OutAmount</th>
<th>Outtotal</th>
<th>OutDate</th> 
<th>NewAdded</th>
<th>TotalBalance</th>
<th>MD</th>
 <th>ED</th>
<th>Add</th>
<th>Out</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

<?php
$con=mysqli_query($link, "select * from products");
while($row = mysqli_fetch_array($con))
{
  echo "<tr>";
  echo "<td>"; echo $row["id"]; echo "</td>";
  echo "<td>"; echo $row["productid"]; echo "</td>";
  echo "<td>"; echo $row["mkd"]; echo "</td>";
  echo "<td>"; echo $row["producttag"]; echo "</td>";
  echo "<td>"; echo $row["productname"]; echo "</td>";
  echo "<td>"; echo $row["description"]; echo "</td>";
  echo "<td>"; echo $row["FReceived"]; echo "</td>";
  echo "<td>"; echo $row["outamount"]; echo "</td>";
  echo "<td>"; echo $row["outtotal"]; echo "</td>";
  echo "<td>"; echo $row["outDate"]; echo "</td>";
  
  echo "<td>"; echo $row["NewAdded"]; echo "</td>";
   echo "<td>"; echo $row["TotalBalance"]; echo "</td>";
   echo "<td>"; echo $row["md"]; echo "</td>";
   echo "<td>"; echo $row["ed"]; echo "</td>";
  //  if ($row["TotalBalance"] <= 100){
 
  //     // 
  //     echo  "<td>"; echo $row["TotalBalance"]; style="background-color:#0000FF" echo "</td>";
  //   }else{
  //     echo "<td>"; echo $row["TotalBalance"]; echo "</td>";

  // }
  
  // echo "<td>"; echo $row["TotalBalance"]; echo "</td>";

  



  echo "<td>"; ?> <a href = "edit.php? id= <?php echo $row["id"]; ?>"> <button type ="button" class="btn btn-success">AddNew </button></a><?php echo "</td>";
  echo "<td>"; ?> <a href = "out.php? id= <?php echo $row["id"]; ?>"> <button type ="button" class="btn btn-success">Discharge </button></a><?php echo "</td>";
 
  echo "<td>"; ?> <a href ="delete.php? id= <?php echo $row["id"]; ?>"> <button type ="button" class="btn btn-primary">Delete</button></a><?php echo "</td>";

   echo "</tr>";
}

?>

</tbody>
</table>

</div>

</body>

<?php

if (isset($_POST["insert"]))
{
  mysqli_query($link, "insert into products values(NULL, '$_POST[productid]', '$_POST[mkd]','$_POST[producttag]','$_POST[productname]','$_POST[description]','$_POST[FReceived]','0','0','0','0','$_POST[FReceived]','$_POST[md]','$_POST[ed]')");

  // $mysqli->query("INSERT INTO products (productid, mkd, producttag,productname, description,received,outdate,outp,newarrived,currentamount ) VALUES( '$productid,'$mkd','$producttag','$productname','$description','$received','0','0','0','0','0')")or die
  // ($mysqli->error);
    // NULL, '$_POST[productid]', '$_POST[mkd]','$_POST[producttag]','$_POST[productname]','$_POST[description]','$_POST[amount]','?','?','?','?','?'
?>

<script type = "text/javascript">
window.location.href=window.location.href;
</script>

<?php

}

if (isset($_POST["delete"]))
{
  mysqli_query($link, "delete from products where productid ='$_POST[productid]'") or die (mysqli_error($link));

?>

<script type = "text/javascript">
window.location.href=window.location.href;
</script>

<?php
}


if (isset($_POST["update"]))
{
  mysqli_query($link, "update products set productid = '$_POST[mkd]' where productid = '$_POST[productid]'") or die (mysqli_error($link));

?>

<script type = "text/javascript">
window.location.href=window.location.href;
</script>

<?php

}


//

if (isset($_POST["out"]))
{
  mysqli_query($link, "update products set productid = '$_POST[mkd]' where productid = '$_POST[productid]'") or die (mysqli_error($link));

?>

<script type = "text/javascript">
window.location.href=window.location.href;
</script>
<?php

}
//

?>



