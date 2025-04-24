<?php
//database page connection
include "config.php";

?>

<?php
//index.php page - a href="delete.php?id='.$id.'"

if(isset($_GET['id'])){
    $id = $_GET ['id'];
$query = "delete  from students where id = $id";

$deleteData = mysqli_query($connection, $query );

if ($deleteData == true){
    header('location: index.php');
}
else{
    echo "failed to delete data";
}

}
else{
    echo "No id is found!!";
}

?>