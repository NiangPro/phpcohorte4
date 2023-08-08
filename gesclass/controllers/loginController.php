<?php 

$message = "";
if(isset($_POST["login"])){
    extract($_POST);

    $user = seconnecter($email, $mdp);
    if($user){
        $_SESSION["user"] = $user;
        if($user->role == "admin"){
            return header("Location:?page=admin");

        }else{

            return header("Location:?page=client");
        }
    }else{
        $message = "email ou mot de passe incorrect";
    }
}

require_once("views/login.php");