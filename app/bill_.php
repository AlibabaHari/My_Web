<?php

namespace App;
use Request;
use customer;

class customer
{
   
    public $country = null;
    public $firstname= null;
    public $lastname = null;
    public $company =null;
    public $street =null;
    public $address = null;
    public $city = null;
    public $code_zip=null;
    public $email =null;
    public $phone =null;


    public function __construct($customer){
       $this->$country= $customer->country;
       $this->$firstname= $customer->firstname;
       $this->$lastname = $customer->lastname ;
       $this->$company = $customer->company;
       $this->$address= $customer->address;
       $this->$city = $customer->city ;
       $this->$code_zip= $customer->code_zip;
       $this->$email= $customer->email;
       $this->$phone= $customer->phone;
    }
     public function add(Request $req){
     	$cus = new customer();
       $cus->$country= $req->country;
       $cus>$name= $req->firstname + $red->lastname ;
       
       $cus->$company = $req->company;
       $cus->$address= $req->address;
       $cus->$code_zip= $req->code_zip;
       $cus->$email= $req->email;
       $cus->$phone_number= $req->phone;  
       $cus->save(); 
        
    }

    
    
    

}
