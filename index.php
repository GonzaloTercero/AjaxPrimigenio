<?php

require_once __DIR__.'/Login/LoginController.php';


if(!empty($_POST)){

    
    $action = $_POST['action'];
    
    if(strcmp($action, "login") === 0){
        //aqui hago login
        
        $loginController = new LoginController();
        $result = $loginController->checkLogin();
    } else if(strcmp($action, "register") === 0){
        
    }
    echo json_encode($result);
    return;
}

if(!empty($_GET)){
    $array['status'] = 'OK';
    $array['result'] = 0;
    $array['msg'] = "Es una petición GET";    

    echo json_encode($array);
    return;
}

