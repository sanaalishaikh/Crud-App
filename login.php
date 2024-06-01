<?php
session_start();


  require 'classes/Database.php';
  require 'classes/User.php';

  $database = new Database();
  $conn = $database->getdb();
  $response ='';

  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if( User::auth( $conn , $email , $password )  ){
      // $response ='Login Successful';

      $_SESSION['logged_in'] = true;
      header('location: index2.php');
    } else {
      // echo "error";   
      $response ='error';

      // $response =  "Email or password does not match ";
    }
  }

?>




  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
  </head>
  
  <body>
     <div class="container">
        <div class="row text-center">

        <div class="my-5 rounded shadow col-md-6 m-auto">
          <h1 class="text-success"> Login Here </h1>

           <form action=""method= "POST">
            <div class="text-primary text-center border border-primary">
            <?=$response ?>
            </div>
            <div class="my-3">
            <input  class="form-control" name="email" type="email" placeholder="name@example.com">
            </div>
            <div class="my-3">
            <input class="form-control" name="password" type="password"  placeholder="********">
            </div>
            <div class="my-3">
            <input class="form-control btn btn-success" type="submit" value="Login">
            </div>
            
            
          </form>
       
        
   </div>
  
  </div>
                    
    </div>
   </form>
    </div>
  