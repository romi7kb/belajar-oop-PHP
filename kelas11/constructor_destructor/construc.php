<?php
class User
{
    public $username;
    private $password;
    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }
    public function login(){
        if ($this->username=="romi" && $this->password==123) {
            return "Anda Berhasil Login";
        }
        else {
            return "Username/Password yang anda masukan salah";
        }
    }
}
$user1 = new User($_POST['username'],$_POST['password']);
echo $user1->login();
?>