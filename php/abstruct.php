<?php


abstract class User{
    abstract public function login();
}


class Admin extends User{
    public function login(){
        echo "admin login successfully";
    }
}


class customer extends User{
    public function login(){
        echo "customer login successfully";
    }
}


$type = trim(fgets(STDIN));

if(strtolower($type)=='admin'){
    $user = new Admin();
}
elseif(strtolower($type)=='customer'){
    $user = new customer();
} else {
    exit;
}

$user->login();


?>