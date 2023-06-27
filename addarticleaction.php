<?php

include "connection.php";


$title=$_POST['txttitle'];
$writer=$_POST['txtwriter'];
$category=$_POST['txtcategory'];
$date=$_POST['txtdate'];
$article=$_POST['txtarticle'];
$username=$_SESSION['username'];

        $query="INSERT into table2(title,writer,category,date,article,username) values('$title','$writer','$category','$date','$article','$username')";

            mysqli_query($con,$query) or die(mysqli_error($con));
        header("location:addarticle.php");




?>