<?php
  include("connection.php") ;
include ("header.php");


?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>





<div class="row">
  <div class="leftcolumn">
    <?php
      $query="SELECT*from table2 ORDER BY id desc limit 2";
      $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
           echo "<div class=card>
          <h2>".$row['title']."</a></h2>
          <h5>".$row['category']."- ".$row['date']."</h5>
          <p>".$row['article']."</p>
          
    </div>";
        }
      }
      
    ?>
  </div>
  <div class="rightcolumn">
  <?php
      $query="SELECT*from table2 ORDER BY id desc limit 1";
      $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){

           echo "<div class=card>
            
            <p>".$row['article']."</p>
    </div>";
        }
      }
      ?>