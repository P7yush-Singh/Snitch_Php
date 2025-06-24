<?php
    session_start();
    include('../config/dbcon.php');

    if(isset($_POST['register_btn'])){
        $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

        if($password == $cpassword){
            //insert user data
            $insert_query = "INSERT INTO `users` (`name`, `email`, `phone`, `password`) VALUES ('$name', '$email', '$phone', '$password')";
           $insert_query_run = mysqli_query($conn, $insert_query);


           if($insert_query_run){
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../login.php');
           } else {
                $_SESSION['message'] = "Something went wrong";
                header('Location: register.php');
           }
        } else{
            $_SESSION['message'] = "Password and confirm password do not match";
            header('Location: register.php');
        }
    }

?>