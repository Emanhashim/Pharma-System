
<?php
 include_once '../controller/dbcontroller.php';

if(isset($_POST['user']) && isset($_POST['newpass'])){
  $user=$_POST['user']; 
 
   $newpass=$_POST['newpass'];
 
  
   $db=new dbcontroller();
   $result=$db->updatepass($user,$newpass);
   
       if($result =='1'){
       //secho 'sucessfuly login';
       header("Location: ../MDB-Free_4.8.2/landingpage");
     // window.open("../MDB-Free_4.8.2/index.php");
       }
       else {
//         
           
        echo 'Try again';

                  
       }
    

}



