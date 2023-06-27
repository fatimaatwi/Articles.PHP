<?php

include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <form action="addarticleaction.php" method="post" >
    <center>
        <table width="50%" border=0>
            <tr>
                <td> Article Title:</td>
                <td><input type="text" placeholder="Article title" name="txttitle"></td>
</tr>
<tr>
    <td> Article writer:</td>
    <td><input type="text" placeholder="Writer" name="txtwriter"></td>
</tr>

<tr>
    <td> Article category:</td>
    <td>
        <select name="txtcategory">
            <option>politics</option>
            <option>sports</option>
            <option>Economy</option>
            
</select>
</td>
</tr>
<tr>
    <td>Article Date:</td>
    <td><input type="date" name="txtdate"></td>
</tr>
<tr>
    <td>Article:</td>
    <td><textarea name="txtArticle" cols=90rows=50></textarea></td>
</tr>

<tr>
<td><input type="submit" value="Submit"></td>
<td><input type="reset" value="Reset"></td>
</tr>


</table>

</center>
</form>
    
</body>
</html>