<?php
    session_start();
    include('connection.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT*  From table1 where email = '$email' && password = '$password' ";
    $result= mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){


        $row=mysqli_fetch_assoc($result);
        $_SESSION['user_info']=$row;

        header('location:index.php');
    }else{
        header("location:login.php?flag=1");
    }

?>