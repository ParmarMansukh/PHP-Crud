<?php

include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM `mansukh` WHERE id = $id ";
$result = mysqli_query($conn,$sql);

if($result)
{
   header("Location:ind.php");
}

else{
   echo "Failed";
}
?>
