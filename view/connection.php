 <?php
$link = mysqli_connect("localhost","root","") or die (mysqli_error($link));
mysqli_select_db($link, "pharma") or die(mysqli_error($link));
?> 

 <?php

$error= "error";

        $db_host = "localhost";
        $db_username = "root";
        $db_pass = "";
        $db_name = "pharma";
       
$con = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or die($error);

?> 

