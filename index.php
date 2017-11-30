<?php

require_once __DIR__.'/Login/LoginController.php';


if(!empty($_POST)){

    
    $action = $_POST['action'];
    
    $loginController = new LoginController();
    $result = $loginController->$action();
    echo json_encode($result); 
    /*
    if(strcmp($action, "login") === 0){
        //aqui hago login
        $name = "checkLogin";
        $loginController = new LoginController();
        $result = $loginController->$name();
        echo json_encode($result);
        
    } else if(strcmp($action, "register") === 0){
        $loginController = new LoginController();
        $result = $loginController->register();
        echo json_encode($result);
    }*/
    return;
}

if(!empty($_GET)){
    $array['status'] = 'OK';
    $array['result'] = 0;
    $array['msg'] = "Es una petición GET";    

    echo json_encode($array);
    return;
}

