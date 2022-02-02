<?php

$active = "salesannounce";
include_once './template/header.php';

?>

<?php

$active = "salestrial";
include_once './template/header.php';
 
include  "connection.php";

?>





<!-- this one to fetch n display -->
<div class ="col-lg-12">
<table class ="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>OutId</th>
<th>ProductName</th>
<th>ProductTag</th>
<th>Amount</th>



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
  mysqli_query($link, "insert into requests values(NULL, '$_POST[outid]', '$_POST[productname]', '$_POST[producttag]', '$_POST[outamount]','$_POST[outdate]','PENDING')");

  
?>

<script type = "text/javascript">
window.location.href=window.location.href;
</script>

<?php

}



?>



