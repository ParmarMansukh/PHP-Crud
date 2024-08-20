<?php

 include "db.php";

 $id=$_GET['id'];

 if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $lastname=$_POST['lastname'];

    $sql="UPDATE `mansukh` SET `name` = '$name', `lastname` = '$lastname' WHERE id= $id";
  $result=mysqli_query($conn,$sql);

  if($result)
  { 

    header("Location:ind.php ?msg= new record created successfully");
  }
  else{

    echo "failed". mysqli_error($conn);
  }
 
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit crud </title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>


body{
  display: flex;
    /* background:linear-gradient(rgb(8, 175, 241),rgb(1, 2, 1),rgb(72, 21, 212)) ; */
    background: linear-gradient(to bottom right, #00c6ff, #0072ff, #8e44ad, #c0392b);


    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #1e1e1e;
    font-family: Arial, sans-serif;

}
input{
  margin:6px;
  border-radius:7px ;

  border:1px solid black;
}


.section{
      /* border:12px solid red; */
/* border:2px solid red; */
background: linear-gradient(to bottom right,black,white,gold, black);

border-top: 3px solid rgb(196, 235, 24);
border-left: 3px solid rgb(211, 18, 18);
border-right: 3px solid rgb(211, 17, 162);
border-bottom: 3px solid rgb(5, 185, 20);



padding: 80px;
border-radius: 8px;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
width: 420px;

   }

   button{
  margin-left: 29px;

   }
   h3{
    text-align: center;
    justify-content: center;
    margin-top:0;
  margin-bottom: 19px;
    
    
   }
   b{
    color:red;
   }
  </style>
<body>
 
<?php

 include "db.php";

 $id =$_GET['id'];

 $sql="SELECT * FROM `mansukh` WHERE id = $id LIMIT 1";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);

?>
       

  <div class="section"> 
       <h3> <b>E</b>dit <b>D</b>atabas<b>e</b></h3>
          
<form action=""method="post">
    <input type="text" name="name" value="<?php  echo $row['name']; ?>"> <br>
    <input type="text" name="lastname" value="<?php  echo $row['lastname']; ?>"> <br> <br>
    
    <!-- <button type="submit" name="submit" >update </button> -->
 <button type="submit" name="submit"  class="btn btn-danger">Update</button>
  

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>