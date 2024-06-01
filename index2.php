<?php
session_start();
  if( !$_SESSION ['logged_in'] ) {
    header( 'location:login.php');
    die();
  }
  




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <div class="container ">
       <div class="row">
    <h2>Welcome to Index.php File</h2>
    <a href="logout.php">Logout</a>
</div>
    </div>
</body>
</html>