<?php
session_start();
include '../config/config.php';
$action=$_REQUEST['submit'];//form submit button name

switch($action){
    case 'submit': // form submit button value
        $fullname = $_REQUEST['full_name'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $password = $_REQUEST['password'];
        $c_password = $_REQUEST['c_password'];

        if($password == $c_password){

           $db->query("INSERT INTO `user_data`(`f_id`,`full_name`,`email`,`phone`,`password`,`c_password`) 
            VALUES (NULL,'$fullname','$email','$mobile','$password','$c_password')"); 
            header("Location: ../login.php");
        }
        else{
            header("Location: ../registration.php");
        }
        break;
    case 'login':
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $data = $db->query("SELECT * FROM user_data WHERE email= '$email' AND password='$password'");
        if(!empty($data->num_rows)){
            $value = $data->fetch_object();
            $f_id = $value->f_id;
            $_SESSION['f_id'] = $f_id;
            header("Location: ../result.php");
        }
        else{
            echo "<script>alert('Email or Password is incorrect');window.location.replace('../login.php');</script>";
        }
        break;
    default:
        echo "Invalid Request";
        break;
}
?>