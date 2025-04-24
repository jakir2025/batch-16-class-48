<?php
//database page connection
include "config.php";

?>
<?php
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from students where id = $id";

   $singledata  =  mysqli_query($connection , $query);

   $realdata = mysqli_fetch_assoc($singledata);

    $iddb = $realdata['id'];
    $name = $realdata['name'];
    $roll = $realdata['roll'];
    $class = $realdata['class'];
    $phone = $realdata['phone'];
    $email = $realdata['email'];
    $address = $realdata['address'];

 }

 if(isset($_POST['submit'])){
    $id = $_GET['id'];

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = "update students set name ='$name', roll ='$roll', class ='$class', phone ='$phone', email ='$email', address='$address' where id = $id";
    $updateData = mysqli_query($connection, $query);

    if( $updateData == true){
        header('location:index.php');
    }
    else{
        echo "failed to insert data";
    }
 }
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
          <a class="nav-link" href="create.php">Insert Data</a>
        </li>
    </div>
  </div>
</nav>


<div class="container">
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $name?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">roll:</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="roll" value="<?php echo $roll?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">class:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="class" value="<?php echo $class?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone:</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="phone" value="<?php echo $phone?>" required >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email:</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo $email?>" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">address:</label>
    <textarea name="address" id="" class="form-control" required><?php echo $address?></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>