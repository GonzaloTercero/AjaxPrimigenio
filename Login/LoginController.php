<?php


require_once __DIR__ .'/LoginModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class LoginController {
    //put your code here
    
    public function checkLogin(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        $model = new LoginModel($user, $pass);
        $status = $model->checkLogin($user, $pass);
        return $status;
    }
    
    public function register(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        
        $model = new LoginModel();
        return $model->addUser($user, $pass, $email, $rol);
        
    }
}
