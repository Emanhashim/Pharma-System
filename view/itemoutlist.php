<?php

$active = "outitemlist";
include_once './template/header.php';

include  "connection.php";

?>

<?php
include ('connection.php');  
if(isset($_GET['search']) && $_GET['search']==""){
    $sql= "SELECT * FROM dischargeproducts";
}
if(isset($_GET['search'])){
    $sql= "SELECT * FROM dischargeproducts WHERE productname like '%$_GET[search]%'";
}else{
    $sql= "SELECT * FROM dischargeproducts";
}

$res= mysqli_query($con,$sql);

?>




<div class="container d-flex justify-content-end mt-3">
    <form class="form-inline" style="width: 400px;  margin-left: 10px; margin-right: 20px; margin-top: 20px;" method="GET" action="letterdis.php">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input name="search" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
          aria-label="Search">
      </form>
</div>


<?php

while ($row = mysqli_fetch_array($res)){

     $outid=$row['outid'];
     $productname=$row['productname'];
     $producttag=$row['producttag'];
      $outamount=$row['outamount'];
      $outdate=$row['outdate'];
    ?>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">


 <!-- <thead>
    <tr>
      <th class="th-sm">ID
      </th>
      <th class="th-sm">ProductName
      </th>
      <th class="th-sm">ProuductTag
      </th>
      <th class="th-sm">Amount
      </th>
      <th class="th-sm">OutDate
      </th>
     
    </tr>
  </thead> -->

  <?php
  echo '
  <thead>
  <tbody>
    <tr>
    <tr>
      <th class="th-sm">Id
      </th>
      <th class="th-sm">ProductName
      </th>
      <th class="th-sm"> ProductTag
      </th>
      <th class="th-sm"> Amount
      </th>
      <th class="th-sm"> Date
      </th>
     
     
    </tr>
  </thead>
 
                        ';
     
                        
    
                                      
     echo'  <td> ' .$outid.' </td>';
      echo' <td> ' .$productname.'</td>';
     echo' <td> '.$producttag.' </td> ';
     echo' <td> ' .$outamount.'</td>';
     echo' <td> '.$outdate.' </td> ';

     echo'
      
    </tr>
    </th>
    </tbody>
  </tfoot>
  </table>

   ';

     
}
?>
<script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
