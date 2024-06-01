<?php

require 'classes/Database.php';
  require 'classes/User.php';

  $database = new Database ();
  $conn = $database->getdb();

  $id = $_GET['id'];

  $user = User:: showOne( $conn , $id);
 

  
 


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

    <!--we will have one form CREATE and one Table READ here -->

    <div class="container">
        <div class="row">
               
         <!--Column for table creation to show all data -->
            <div class="col-md-6">
                <h3 class="my-3 text-center"> Data of<td> <?= $user['name'] ?></td> </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <th scope="row"> <?= $user['id'] ?> </th>
                                <td>  <?= $user['name'] ?> </td>
                                <td>  <?= $user['email'] ?> </td>
                                <td>  <?= $user['password'] ?> </td>
                                <td>  <a class="text-primary" href="single.php?id =<?=$user['id']?>"> Edit</a> </td>
                                <td>  <a class="text-danger" href="delete.php?id= <?=$user['id']?>"> Del </a></td>
                                
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>