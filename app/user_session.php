<?php

namespace App;


class user_session
{
    public $email =null;
    public $last_name = null;
    public $pass = null;
    public function __construct($email, $last_name, $pass, $address,$type){
        
            $this->email=$email;
            $this->last_name =$last_name;
            $this->pass = $pass;
            $this->address = $address;
            $this->user_type = $type;
        
    }  

}
