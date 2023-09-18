<?php
include_once "../views/admin/login.php";
include_once "../models/function.php";
include_once "../models/database.php";


if (isset($_POST['login_admin'])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    foreach ($post->get_val('admins') as $val) :
        if ($email == $val['email'] && $pass == $val['pass']) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location:../controllers/admin.php"); 
            exit();
        }else{
            header("location:login.php"); 

        }
    endforeach;
}

