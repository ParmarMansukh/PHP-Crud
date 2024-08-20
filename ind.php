<?php

include "db.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>display show the databse</title>
</head>

<style>

*{
    margin: 0;
    padding: 0;
 }
     table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 78%;
  margin-left: 107px;


}

td, th {
  border: 3px solid #dddddd;
  text-align: left;
  padding: 8px;
}

 
  th{
    text-align: center;
    justify-content: center;
  background-color: rgb(247, 77, 77);

  }
  
  td{
    text-align: center;
    justify-content: center;
  }


                   /* navbar style  */
                   
a{
 text-align: center;
 align-items: center;
 justify-content: center;
 text-decoration: none;
 color:black;
 font-size:18ox;

}



nav{
display: flex;
 border-radius: 4px;
   
background: rgb(236, 76, 76);
 font-size: 25px;
 text-align: center;
 padding: 5px;
 
 display: flex;

 
  justify-content: center;
 
 }
 nav a{
   margin:0 75px;

 }
  li{
   list-style: none;
   padding:  0 23px;
   
   
   
   
 }
 input{ 
   justify-content: center;
    align-items: center;
    border-radius: 3px;
    height: 23px;
    text-align: center;
    border:black;
    width: 17%;
    margin-top: 3px;
    font-size: 16px;
    margin-left: 23px;
    background-color: rgb(239, 241, 241);
 color:black;
    
 

 }

 td a{
    margin-left: 28px;
    color:rgb(19, 0, 190);
    
 }
 h1{
  /* justify-content: center;
  align-items: center; */
  text-align: center;
  padding-bottom: 12px;
  /* margin-top:4px; */
 }
 b{
  color:red;
 }
 m{
  color:yellow;
 }
 w{
  color:green;
 }
</style>
<body>

  <script>
        function searchTable() {
            const input = document.getElementById('sbox').value.toLowerCase();
            const table = document.getElementById('dataTable');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                const td = tr[i].getElementsByTagName('td');
                let showRow = false;
                
                for (let j = 0; j < td.length; j++) {
                    
                    if (td[j].textContent.toLowerCase().indexOf(input) > -1) {
                        showRow = true;
                        break;
                    }
                }

                tr[i].style.display = showRow ? '' : 'none';
            }
        }
    </script>




                           <!-- navbar -->


                             
<nav>


<a href="#">home</a>
<a href="#">about</a>
<a href="#">contect</a>
<a href="index.php"> <m>D</m>atabase <m>A</m>dd</a>
<input id="sbox" type="text" placeholder="Search" onkeyup="searchTable()">



</nav>

                           <!-- navabr -->

  <br> <br> <br>
      <br>
           <h1> <b>D</b>a<w>t</w>abas<b>e</b> </h1>  
    
      <table border="1" id="dataTable">
        <thead>
      <tr>
            <th>id</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Action</th>
      </tr>
 </thead>

 <tbody>
            <?php
                
                 $sql ="SELECT * FROM `mansukh` ";
                 $result= mysqli_query($conn,$sql);
                 while($row =mysqli_fetch_assoc($result)) {
            ?>

       <tr>
            <td> <?php  echo $row["id"] ?> </td>
            <td> <?php  echo $row ["name"] ?> </td>
            <td> <?php  echo $row["lastname"] ?>  </td>
            <td>
              <!-- <a href="dele.php?id=<?php echo $row["id"] ?>" >delete</a> -->
              <a href="dele.php?id= <?php  echo $row["id"] ?>" >delete</a>

              <a href="Edit.php?id= <?php  echo $row["id"] ?>" >update</a>


              
                 
            </td>
 </tr>
 



<?php
    }
?>


 </tbody>
</table>


</body>
</html>



