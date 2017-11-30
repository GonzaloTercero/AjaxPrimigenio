<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class LoginModel {

    
    public function checkLogin($user, $pass){
        $result['status'] = 'KO';
        $result['msg'] = 'no me da la gana loguearte';
        $result['result'] = 'fail absoluto'; 
        return $result;
    }
}
