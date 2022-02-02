<?php


class dbconnect {
    private $conn;
  function __construct() {
      
  }
  
  function connect(){
  $host='localhost';
  $user='root';
  $password='';
  $dbname='pharma';
  
  $this->conn=new mysqli($host, $user, $password, $dbname);
  
  return $this->conn;
  }
}
