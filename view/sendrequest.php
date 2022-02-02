<?php

$active = "adminsendrequest";
include_once './template/header.php';
 
include  "connection.php";

?>




<!-- this is pasted from sendrequesttoadmin.php -->

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
    $sql= "SELECT * FROM requests WHERE productname like '%$_GET[search]%'";
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








<!-- this one to fetch n display -->
<div class ="col-lg-12">
<table class ="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>ItemId</th>
<th>Name</th>
<th>Tag</th>
<th>Amount</th>
<th>Date</th>


<th>Approved</th>
<th>Cancle</th>

</tr>
</thead>
<tbody>

<?php
$con=mysqli_query($link, "select * from requests");
while($row = mysqli_fetch_array($con))
{
  echo "<tr>";
  echo "<td>"; echo $row["id"]; echo "</td>";
  echo "<td>"; echo $row["outid"]; echo "</td>";
  echo "<td>"; echo $row["productname"]; echo "</td>";

  echo "<td>"; echo $row["producttag"]; echo "</td>";
 
  echo "<td>"; echo $row["outamount"]; echo "</td>";
  echo "<td>"; echo $row["outdate"]; echo "</td>";
  
  



  echo "<td>"; ?> <a href = "approved.php? id= <?php echo $row["id"]; ?>"> <button type ="button" name ="approved" class="btn btn-success">Approved </button></a><?php echo "</td>";
  echo "<td>"; ?> <a href = " <?php echo $row["id"]; ?>"> <button type ="button" class="btn btn-success">Cancle </button></a><?php echo "</td>";
 
  
   echo "</tr>";
}

?>

</tbody>
</table>

</div>

</body>

<?php

if (isset($_POST["approved"]))
{
    mysqli_query($link, "insert into reqtrial values(NULL, '$_POST[outid]','$_POST[productname]','$_POST[producttag]','$_POST[outamount]','$_POST[outdate]' ,'APPROVED')");

 
?>

<script type = "text/javascript">
window.location.href=window.location.href;
</script>

<?php

}



?>





