<?php


class User
{
    // properties
    public $id;
    public $username;
    public $email;
    protected $status = 'active';

    public function __construct($id, $username, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }
    //methods
    public function login()
    {
        echo $this->username . " Has been logged in";
    }

    public function getStatus(){
        echo $this -> status;
    }
}   

class Admin extends User {
    public $level;

    public function __construct($id,$username,$email,$level){
        $this ->level = $level;
        parent::__construct($id,$username,$email);
    }

}

$admin = new Admin("001","Taha Goulzima","taha@goulzima.com","5");

//var_dump($admin);
//$admin->login();
$admin->getStatus();
?>