<?php

class dbcontroller {
   private $conn;
    function __construct() {
        
        include_once 'dbconnect.php';
    
        $db=new dbconnect();
        $this->conn=$db->connect();

}
// this for login foreach

public function login($username, $password){
        $pass=  md5($password);
        $stm=$this->conn->prepare("select * from account where username=? and password=?");
        $stm->bind_param("ss", $username, $pass);
        $stm->execute();
        $row = $stm->get_result();
          if($row->num_rows>0){
              return $row->fetch_assoc();
             
          }else {
              return -1;
    }
}

//get foreign key
public function getId($username, $password){
         $pass=  md5($password);
        $stm=$this->conn->prepare("select * from account where username=? and password=?");
        $stm->bind_param("ss", $username, $password);
        $stm->execute();
        $row = $stm->get_result()->fetch_assoc();
        return $row['accountid'];
        
}

//this for paper id

//finance
public function adminsignup($firstname,$lastname,$username,$password,$accId){

    $stm= $this->conn->prepare(" insert into it(firstname,lastname,username,password,accId) values(?,?,?,?,?);");

    $stm->bind_param("sssss",$firstname,$lastname,$username,$password,$accId);
    if($stm->execute()){
        return 1;
        
    
    }
     
   }
        public function adminps($username,$password){
             $pass=md5($password);
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'Admin');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }


        public function salesignup($firstname,$lastname,$username,$password,$accId){

            $stm= $this->conn->prepare(" insert into ie(firstname,lastname,username,password,accId) values(?,?,?,?,?);");
   
            $stm->bind_param("sssss",$firstname,$lastname,$username,$password,$accId);
            if($stm->execute()){
                return 1;
                
            
            }
             
           }
        public function salesps($username,$password){
             $pass=md5($password);
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'sales');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }




        // this for store signup n login

       
        public function storesignup($firstname,$lastname,$username,$password,$accId){

            $stm= $this->conn->prepare(" insert into it (firstname,lastname,username,password,accId) values(?,?,?,?,?);");
   
            $stm->bind_param("sssss",$firstname,$lastname,$username,$password,$accId);
            if($stm->execute()){
                return 1;
                
            
            }
             
           }
        public function storeps($username,$password){
             $pass=md5($password);
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'store');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }


        //normalstuffs

        public function stuffsignup($firstname,$lastname,$username,$password,$accId){

         $stm= $this->conn->prepare(" insert into motor(firstname,lastname,username,password,accId) values(?,?,?,?,?);");

         $stm->bind_param("sssss",$firstname,$lastname,$username,$password,$accId);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
        public function stuffps($username,$password){
             $pass=md5($password);
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'StuffAdmin');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }

        //stuffadmin

        public function stuffadminsignup($firstname,$lastname,$username,$password,$accId){

            $stm= $this->conn->prepare(" insert into marketing(firstname,lastname,username,password,accId) values(?,?,?,?,?);");
   
            $stm->bind_param("sssss",$firstname,$lastname,$username,$password,$accId);
            if($stm->execute()){
                return 1;
                
            }else{
                return 2;
            }
             
           }
           public function stuffadminps($username,$password){
                $pass=md5($password);
            $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'Stuff');");
            $stm->bind_param("ss",$username,$pass);
            if($stm->execute()){
                return 1;
                
            }else{
                return 2;
            }
             
           }

        
        
        
         public function updatepass($username,$newpass){
              $pass=md5($newpass);
                $stm=$this->conn->prepare("update account set password=? where username=? ");
                $stm->bind_param("ss",$pass,$username);
         if($stm->execute()){
                    return 1;
                }else{
                    return 2;
                }
        
             }
}

?>