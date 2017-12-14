<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class LoginModel {

    
    /*
    MÉTODOS PRIVADOS, COMO APOYO A LOS MÉTODOS
    PÚBLICOS
    */
    
    private function userExists($user, $email){
        return FALSE;
    }
    
    
    /* INSERTA EN BASE DE DATOS EL USUARIO, SI TODO OK Devuelve su
       Id, SI HAY FALLO DEVUELVE 0   */ 
    private function insertUserIntoDB($user, $pass, $email, $rol){
        return 23;
    }
    
    /*
    MÉTODOS PÚBLICOS.
    */
    
    
    public function checkLogin($user, $pass){
        
        $result[0] = ["id" => 1 , "alumno" => "Alfredo Perez"];
        $result[1] = ["id" => 2 , "alumno" => "Maria Estevez"];
        
        return $result;
    }
    
    public function addUser($user, $pass, $email, $rol){
        // primero compruebo si el usuario existe
        if(!$this->userExists($user, $email)){
            // si el usuario no existe lo creo.
            $idUser = $this->insertUserIntoDB($user, $pass, $email, $rol);
            $result['result'] = $idUser;
            if($idUser){
                $result['status'] = 'OK';
                $result['msg'] = "usuario creado";
                
            } else {
                $result['status'] = 'KO';
                $result['msg'] = "error, usuario no creado";
               
            }
            
        } else {
            // el usuario existe, error.
            $result['status'] = 'KO';
            $result['msg'] = 'el usuario ya existe';
            $result['result'] = 0;
        }
        return $result;
    }
    
    
    
}
