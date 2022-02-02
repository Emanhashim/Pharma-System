<?php
$output = "";
include_once '../controller/dbcontroller.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
$password=$_POST['password'];

$db=new dbcontroller();
$result=$db->login($username,$password);
if($result== -1){
 $output =  'Incorrect username or password';    
}else{
    session_start();
    $_SESSION['role'] = $result['role'];
    $_SESSION['accountId']=$result['accountId'];
    $_SESSION['username']=$result['username'];
    header("Location: home.php");
} 
  
}
?>



<!DOCTYPE html>

<!--To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MikilandPharmacy</title>
   <link rel="icon" type="image/png" href="./img/lightbox/logop.jpg"/>
   <!--Font Awesome--> 
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> 
   <!--Bootstrap core CSS--> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
   <!--Material Design Bootstrap--> 
  <link href="css/mdb.min.css" rel="stylesheet">
   <!--Your custom styles (optional)--> 
  <link href="css/style.css" rel="stylesheet">
  <style>
      body{
          background-color: whitesmoke;
      }
      p{
    color: #5cb85c;
}
      .form-simple .font-small {
font-size: 0.8rem; }

.form-simple .header {
border-top-left-radius: .3rem;
border-top-right-radius: .3rem; }

.form-simple input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #5cb85c;
-webkit-box-shadow: 0 1px 0 0 #5cb85c;
box-shadow: 0 1px 0 0 #ff3547; }

.form-simple input[type=text]:focus:not([readonly]) + label {
color: #5cb85c; }

.form-simple input[type=password]:focus:not([readonly]) {
border-bottom: 1px solid #5cb85c;
-webkit-box-shadow: 0 1px 0 0 #5cb85c;
box-shadow: 0 1px 0 0 #5cb85c; }

.form-simple input[type=password]:focus:not([readonly]) + label {
color: #ffc107; }
.form-simple{
    width: 700px;
    height: 1000px;
    alignment-adjust: central;
           /*margin: 0px 40px 60px 20px;*/
           padding: 100px;
}
a:link{
    color: #5cb85c;
}
a:hover{
    color: #5cb85c;
}

  </style>
    </head>
    
    
    <body>
       <div class="d-flex justify-content-center">
        <section class="form-simple">
       <div class="card">
       <div class="header pt-3 white lighten-2">
        <div class="row d-flex justify-content-center">
            <img src="./img/lightbox/logop.jpg" style="width: 20%; border-radius: 50%;">
            <h1 style="color: #5cb85c" class="deep-grey-text mt-3 mb-4 pb-1 mx-5"><b>Login</b></h1>
        </div>
       </div>
           <form style="height: 400px; "action=login.php method="POST">
             <div class="card-body mx-4 mt-4">
           
                
            <div class="col input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user amber-text"></i></span>
                 </div>
                 
                <input type="text" id="Form-username" class="form-control" placeholder="Employee ID" name="username" required>
            
            </div>
                 </br>
             <div class="col input-group">
                 <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock amber-text"></i></span>
                 </div>
                 
                 <input type="password" id="Form-pass4" class="form-control" placeholder="Your password" name="password" required>
             </div>
                 
            <div class="text-center mb-4">
                <button class="btn btn-warning-white" style="margin-top: 40px; background-color: #5cb85c" type="submit" name="submit"><b>Login</b></button>
            <p class="text-danger"><?php echo $output;?></p>
            
            <!--<button type="button" class="btn btn-white">Log in</button>--> 
           </div>
                 <p class="font-small grey-text d-flex justify-content-center">Don't have an account? <a href="getrole.php"  class="dark-grey-text font-weight-bold ml-1"><u> Sign up</u></a></p>
            </div>
            </form>
           </div>
           </section>
         </div>
        
<!--          SCRIPTS JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <!--Bootstrap tooltips--> 
  <script type="text/javascript" src="js/popper.min.js"></script>
   <!--Bootstrap core JavaScript--> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <!--MDB core JavaScript--> 
  <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>