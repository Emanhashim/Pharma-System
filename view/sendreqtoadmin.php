<?php

$active = "sendreqtoadmin";
include_once './template/header.php';

include  "connection.php";

?>





<?php
include ('connection.php');  
if(isset($_GET['search']) && $_GET['search']==""){
    $sql= "SELECT * FROM products";
}
if(isset($_GET['search'])){
    $sql= "SELECT * FROM requests WHERE msgname like '%$_GET[search]%'";
}else{
    $sql= "SELECT * FROM requests";
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
  <h2> Send Requsest</h2>
  <form action="" name ="form1" method ="post">
    <div class="form-group">
      
      <input type="text" class="form-control" id="msgid" placeholder="ProductId" name="msgid">
    </div>
    
    <div class="form-group">
      
      <input type="text" class="form-control" id="msgname" placeholder="Messagename" name="msgname">
    </div>
    <!-- <div class="form-group">
    
      <input type="text" class="form-control" id="productag" placeholder="Producttag" name="producttag">
    </div> -->
    <div class="form-group">
    
      <input type="text" class="form-control" id="description" placeholder="Amount" name="msgamount">
    </div>
    
    <input type="text" class="form-control" id="amount" placeholder="price" name="msgprice">
    </br>

    <div class="form-group">
     
     <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="date" required>
     </div>
    
    
    
    
    <button type="submit" class="btn btn-primary" name ="send">Request?</button>
   
  </form>
</div>
</div>




<!-- this one to fetch n display -->
<div class ="col-lg-12">
<table class ="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>MSGId</th>
<th>ProductName</th>

<th>Amount</th>
<th>Price</th>
<th>Date</th>



</tr>
</thead>
<tbody>

<?php
$con=mysqli_query($link, "select * from message");
while($row = mysqli_fetch_array($con))
{
  echo "<tr>";
  echo "<td>"; echo $row["id"]; echo "</td>";
  echo "<td>"; echo $row["msgid"]; echo "</td>";
  
  echo "<td>"; echo $row["msgname"]; echo "</td>";

  
   echo "<td>"; echo $row["msgamount"]; echo "</td>";
     echo "<td>"; echo $row["msgprice"]; echo "</td>";
     echo "<td>"; echo $row["date"]; echo "</td>";

    




   echo "</tr>";
}

?>

</tbody>
</table>

</div>

</body>

<?php

if (isset($_POST["send"]))
{
  mysqli_query($link, "insert into message values(NULL, '$_POST[msgid]', '$_POST[msgname]',  '$_POST[msgamount]','$_POST[msgprice]','$_POST[date]')");

  
?>

<script type = "text/javascript">
window.location.href=window.location.href;
</script>

<?php

}















