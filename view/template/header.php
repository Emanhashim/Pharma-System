
<?php 
    session_start();
    if(!isset($_SESSION['role'])){
        header('Location: getrole.php');
    }
    $role = $_SESSION['role'];
    $username=$_SESSION['username'];
    
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
                background-color: white;
                /*color: white;*/
            }
            
        .navbar{
               padding-top: 35px;
               padding-bottom:35px; 
               
            }
        .navbar .nav-item{
                margin-right: 10px;
                color: black;
          
            }
        .navbar .nav-link{
                padding-right:20px !important;
                padding-left: 20px !important;
                color: black;
            }
                   .active{
                /*background: #0275d8;*/
                background: #5cb85c !important;
                border-color: black;
                border-radius: 4px;
            }
            .active .nav-link{
                 color: black !important;
            }
            div.img {
                margin: 20px;
                border: 10px solid #ccc;
                float: left;
                width: 150px;
                margin-top: 50px;

            }
            div.img2 {
                margin: 1px;

                float: left;
                width: 300px;
                margin-top: 50px;
            }
            div.img:hover {
                border: 1px solid #777;
            }

            div.img img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
                border: 1px solid #ccc;
            }

            .button {
            background-color:lightslategray;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .grant{
          widith:100;
          height:150;
          margin-left: 400px;
          margin-right: 400px;
          padding: 100px;
      }
      .upload{
             
           alignment-adjust: central;
           /*margin: 0px 40px 60px 20px;*/
           padding: 30px;
      }
      .logo-img{
          width: 50px;
          height: 50px;
          border-radius: 100%;
      }
/*      img {
    border-radius: 50%;
}*/

     
        </style>
    </head>
    
    <body>
            <nav class="mb-1 navbar navbar-expand-lg navbar-light cloudy-knoxville-gradient px-4">
                <img src="./img/lightbox/logop.jpg"  class="d-inline-block align-top mr-2 logo-img"
                  alt="">
                
                <a style="color: #ffc107;"class="navbar-brand text-dark" href="#"><h3><b>MikilandPharmacy</b></h3></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
    
              </button>
              <div class="collapse navbar-collapse text-dark" id="navbarSupportedContent-333">
                <ul class="navbar-nav ml-auto">
                
                     
                   <li class="nav-item <?php if($active=="home") echo "active"?>">
                      <a class="nav-link text-dark" href="home.php">Home
                      <span class="sr-only">(current)</span>
                      </a>
                  </li>
                


                 <?php if($role == "sales" ){ ?>
                    <li class="nav-item <?php if($active=="salestrial") echo "active"?>">
                      <a class="nav-link text-dark" href="trial.php"> StoreItem</a>
                  </li>

                 <?php } ?>
                  <?php if($role == "Admin"){ ?>
                   <!-- <li class="nav-item <?php if($active=="adminsendrequest") echo "active"?>"> 
                      <a class="nav-link text-dark" href="sendrequest.php">sendrequest</a>
                  </li>  -->
                  
                   <?php } ?>
                  
                  <?php if($role == "Admin" ){ ?>
                  <li class="nav-item <?php if($active=="salesannounce") echo "active"?>">
                      <a class="nav-link text-dark" href="storeannounce.php">Request</a>
                  </li>
                  <?php } ?>

                  <?php if($role == "sales" ){ ?>
                  <li class="nav-item <?php if($active=="outitemlist") echo "active"?>">
                      <a class="nav-link text-dark" href="itemoutlist.php">DischargeItems</a>
                  </li>
                  <?php } ?>
                  <?php if($role == "sales" ){ ?>
                  <li class="nav-item <?php if($active=="additemlist") echo "active"?>">
                      <a class="nav-link text-dark" href="itemaddlist.php">AddedItems</a>
                  </li>
                  <?php } ?>
                  
                  <?php if($role == "store" ){ ?>
                  <!-- <li class="nav-item <?php if($active=="outitem") echo "active"?>">
                      <a class="nav-link text-dark" href="trialout.php">InventoryOut</a>
                  </li> -->

                  <?php } ?>
                  <?php if($role == "sales"){ ?>
                  <li class="nav-item <?php if($active=="sendreqtoadmin") echo "active"?>">
                      <a class="nav-link text-dark" href="sendreqtoadmin.php">sendRequest</a>
                  </li>







                  
                  
                  
                 <?php } ?>
                
                 
               
                  
                  <li class="nav-item dropdown">
                     
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                       <i class="fas fa-user"></i>
                       
                        <?php echo $username; ?>
                    </a>
                      
                           
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                      aria-labelledby="navbarDropdownMenuLink-333">
                        <!--<a class="dropdown-item"style="margin-left:10px;" href="setting.php">Signed in as</a>--> 
                     
                      <a class="dropdown-item" href="setting.php">Change Password</a>
                      <a class="dropdown-item" href="logout.php">logout</a>
                      
                    </div>
                  </li>
<!--                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>-->
      </li>



                </ul>
                
              </div>
            </nav>

