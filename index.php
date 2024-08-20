<?php

include "db.php";

if(isset($_POST["submit"])){


   $name = $_POST['name'];
   $lastname = $_POST['lastname'];

   // $sql = "INSERT INTO 'mansukh'('name','lastname') VALUES('$name','$lastname')";
   $sql="INSERT INTO `mansukh` ( `name`, `lastname`) VALUES ( '$name', '$lastname')";

   $result = mysqli_query($conn,$sql);

   if($result){
      header("Location: ?msg = new record created successfully");

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
   <title>PHP Crud</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
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
 
   a{
  /* list-style: none; */
  text-decoration: none;
  width: 36%;
  
  


   }
   button{
  margin-left: 21px;
  width: 36%;


   }
   input{
  border-radius:5px ;
  width: 99%;


   }
   .section{
      /* border:12px solid red; */
/* border:2px solid red; */
background: linear-gradient(to bottom right,black,white,gold,  black);

border-top: 3px solid rgb(196, 235, 24);
border-left: 3px solid rgb(211, 18, 18);
border-right: 3px solid rgb(211, 17, 162);
border-bottom: 3px solid rgb(5, 185, 20);



padding: 80px;
border-radius: 8px;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
width: 420px;

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
   
 <div class="section"> 
 <h3> <b>D</b>atabas<b>e</b>  Add</h3>  

<form action="" method="post">


 <input type="text" name="name"placeholder="name" required> <br><br>
 <input type="text" name="lastname" placeholder="lastname"required> <br><br>
<!-- <button type="submit"  name="submit">Submit</button> -->
 <!-- <input type="submit" name="submit" value="update"> -->
 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  
   <a href="ind.php"  class="btn btn-dark" > click</a>

   



</form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

</body>
</html>





