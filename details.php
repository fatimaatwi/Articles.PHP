<?php
  include ("connection.php");
  ?>




<!DOCTYPE html>
<html>
<head>

</head>
<body>



<div class="row">
  <div class="leftcolumn">
    <?php
        $AID=$_GET['ID'];
        $query="SELECT*from table2 WHERE id='$AID'";
        $result=mysqli_query($con,$query);
    
        if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
           echo "<div class=card>
          <h2>".$row['title']."</h2>
          <h5>".$row['category']."- ".$row['date']."</h5>
          
          <p>".$row['source']."</p>
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
           
            <p>".$row['title']."</p>
    </div>";
      
   
   



</body>
</html>