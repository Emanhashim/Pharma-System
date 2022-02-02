<?php
include  "connection.php";
$id = $_GET["id"];
// $productid ="";
// $mkd ="";
$producttag="";
$productname="";
 $outDate ="";
 $outamount="";
 $outtotal ="";
 $TotalBalance="";

$res=mysqli_query($link, "select * from products where id = $id");
while ($row = mysqli_fetch_array($res))
{
    // $productid=$row["productid"];
    // $mkd=$row["mkd"];
    $producttag=$row["producttag"];
    $productname=$row["productname"];
     $outDate=$row["outDate"];
     $outamount=$row["outamount"];
     $outtotal=$row["outtotal"];
     $TotalBalance= $row["TotalBalance"];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h2>Stacked form</h2>
  <form action="" name ="form1" method ="post">
    <!-- <div class="form-group">
      
      <input type="text" class="form-control" id="productid" placeholder="ProductId" name="productid" value ="<?php echo $productid; ?>">
    </div> -->
    <!-- <div class="form-group">
     
    <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="mkd" value ="<?php echo $mkd; ?> ">
    </div> -->
    <div class="form-group">
      
      <input type="text" class="form-control" id="producttag" placeholder="ProductTag" name="producttag" value ="<?php echo $producttag; ?>">
    </div>
    <div class="form-group">
    
      <input type="text" class="form-control" id="producname" placeholder="ProductName" name="productname"value ="<?php echo $productname; ?>">
    </div>
    

    <div class="form-group">
    
    <input type="text" class="form-control" id="producname" placeholder="outamount" name="outamount"value ="<?php echo $outamount; ?>">
  </div> 
  <div class="form-group">
     
    <input placeholder="Published Date" type="date" id="date-picker-example" class="form-control datepicker" name="outdate" required>
    </div>
  <!-- <div class="form-group">
  
    <input type="text" class="form-control" id="email" placeholder="New OutTotal" name="outtotal"value ="<?php echo $outtotal; ?>">
  </div> -->
   <div class="form-group">
  
  <input type="text" class="form-control" id="email" placeholder="TotalBalance" name="TotalBalance"value ="<?php echo $TotalBalance; ?>">
</div> 
    

    <button type="submit" class="btn btn-primary" name ="update">Update</button>
  </form>
</div>
</div>


</body>

<?php
if (isset($_POST["update"]))
{
mysqli_query($link, "update products set producttag='$_POST[producttag]', productname='$_POST[productname]',outamount='$_POST[outamount]',outdate='$_POST[outdate]',TotalBalance=TotalBalance - '$_POST[outamount]' where id = $id")

&&


mysqli_query($link,"insert into dischargeproducts values(NULL,'$_POST[productname]','$_POST[producttag]','$_POST[outamount]','$_POST[outdate]')"); 


?>
if (isset($_POST["update"]))
{
  mysqli_query($link, "insert into products values(NULL, '$_POST[productid]', '$_POST[mkd]','$_POST[producttag]','$_POST[productname]','$_POST[description]','$_POST[received]','0','0','0','0','0')");

  // $mysqli->query("INSERT INTO products (productid, mkd, producttag,productname, description,received,outdate,outp,newarrived,currentamount ) VALUES( '$productid,'$mkd','$producttag','$productname','$description','$received','0','0','0','0','0')")or die
  // ($mysqli->error);
    // NULL, '$_POST[productid]', '$_POST[mkd]','$_POST[producttag]','$_POST[productname]','$_POST[description]','$_POST[amount]','?','?','?','?','?'
 <!-- ?> -->

?>
<script type = "text/javascript">
window.location = "trial.php";
</script>
<?php

}


?>






</html>
