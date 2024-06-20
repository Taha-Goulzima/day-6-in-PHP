<?php


class User
{
    // properties
    public $id;
    public $username;
    public $email;
    private $status = 'active';

    public function __construct($id, $username, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }
    //methods
    public function login()
    {
        echo $this->username . "The user has been logged in";
    }
    //getter methods
    public function getStatus()
    {
        echo $this->status;
    }

    //setter methods
    public function setStatus($status)
    {
        $this->status = $status;
    }
}

// instantiate a new object 
$user1 = new User('000000001', 'Taha Goulzima', 'taha@goulzima.com');
var_dump($user1);
echo '<br>';



$user2 = new User('000000002', 'MED Goulzima', 'med@goulzima.com');
var_dump($user2);
$user2->setStatus('inactive');
$user2->getStatus();
echo '<br>';



$user3 = new User('000000003', 'Ali Jawad', 'ali@jawad.com');
var_dump($user3);
?>