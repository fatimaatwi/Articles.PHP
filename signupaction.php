<?php 
    include('connection.php');

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = date('Y-m-d H:i:s');

    $query="INSERT into table1 (name,email,password,date) values ('$fullname','$email','$password','$date')";
    mysqli_query($con,$query);

    header("location:login.php");