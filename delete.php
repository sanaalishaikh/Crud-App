<?php

  require 'classes/Database.php';
  require 'classes/User.php';

  $database = new Database ();
  $conn = $database->getdb();

  $id = $_GET['id'];
  if(  User::delete( $conn , $id)){
    header("location:index.php");
  };
 

  
 


?>