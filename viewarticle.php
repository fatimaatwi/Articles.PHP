<?php
;
include( "connection.php");
;
$username=$_SESSION['username'];
$query="SELECT*from table2 where username='$username'";
$result=mysqli_query($con,$query);
?>
<center>
<table width="80%">
<tr bgcolor=grey>
    <td>ID</td>
    <td>title</td>
    <td>writer</td>
    <td>category</td>
    <td>date</td>
    <td>article<td>
   
            </tr>
<?php
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr>
            <td>".$row['id']."</td>
            <td><a href=articledetials.php?ID=".$row['id'].">".$row['title']."</a></td>
            <td>".$row['writer']."</td>
            <td>".$row['category']."</td>
            <td>".$row['date']."</td>
            <td>".$row['article']."</td>
            
            </tr>";

        

}
}
else
echo "no recordes founds";

?>
</table>
</center>