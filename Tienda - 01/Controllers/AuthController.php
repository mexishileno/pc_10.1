<?php

use Models\Auth;

require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';


class AuthController
{
    public function login()
    {

        $correo =  $_POST['correo'];

        $password =  $_POST['password'];

        $auth = new Auth;
        $user = $auth->select($correo);

        if(password_verify($password, $user['password'])){

            session_start();
            $_SESSION['userData'] =  $user;

            header('location: ../Views/templates/sidebar.php');
            
        }else{
            header('location: ../index.php');
        }
        
    }

    public function store()
    {

        $correo =  $_POST['correo'];
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $rol_id =  $_POST['rol'];

        $auth = new Auth;
        $auth->register($correo,  $hash, $rol_id);

        header('location: index.php');
    }
}
