<?php
//database page connection
include "config.php";

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD OPERATION-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Create.php">Insert Data</a>
        </li>
    </ul>
          
     
    </div>
  </div>
</nav>


<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL:</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Class</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //database connected, Table connection query;
    $query = "SELECT * FROM students";
    $students = mysqli_query($connection, $query);
     //id na dekhiye serialNumber dekhanur query
    $serialNumber = 1;
      //while loop ar maddome data withdraw kore niye asha 'query';
     while ($row = mysqli_fetch_assoc($students)){
           $id = $row['id'];
           $Name = $row['name'];
           $roll = $row['roll'];
           $class = $row['class'];
           $phone = $row['phone'];
           $email = $row['email'];
           $address = $row['address'];
           
           // concret table
           echo '
               <tr>
                  
                  <th scope="row">'.$serialNumber.'</th>
                  <td>'.$Name.'</td>
                  <td>'.$roll.'</td>
                  <td>'.$class.'</td>
                  <td>'. $phone.'</td>
                  <td>'.$email.'</td>
                  <td>'. $address.'</td>

                  <td>
                   <a href="edit.php?id='.$id.'" class="btn btn-primary">Edit</a>
                  <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a>
                 </td>
               </tr>';
               $serialNumber ++;
     }
    ?>
    </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>