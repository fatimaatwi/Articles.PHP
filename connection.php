<?php
    $host="localhost";
    $db_username="root";
    $db_pass="";
    $db_name="db";

    $con=mysqli_connect($host,$db_username,$db_pass,$db_name);
    if(!empty($con)){
        echo("connection done");
    }else{
        echo("connection error");
    }



?>