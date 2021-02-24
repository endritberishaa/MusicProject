<?php
include_once 'Admin.php';
include_once 'SimpleUser.php';
require_once 'UserMapper.php';
session_start();
//main

if (isset($_POST['loginbtn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['registerbtn'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();

} 

class LoginLogic
{
    private $email = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->email = $formData['email'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->email, $this->password)) {
            header("Location:LoginForm.php");
        } else if ($this->emailAndPasswordCorrect($this->email, $this->password)) {
            return true;
        } else {
            header("Location:LoginForm.php");
        }
    }

    private function variablesNotDefinedWell($email, $password)
    {
        if (empty($email) || empty($password)) {
            return true;
        }
        return false;
    }

    private function emailAndPasswordCorrect($email, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByEmail($email);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['Password'])) {
            if ($user['Role'] == 1) {
                $obj = new Admin($user['ID'], $user['Username'], $user['Password'], $user['Role']);
                header('Location:HomePageAdmin.php');
            } else {
                $obj = new SimpleUser($user['ID'], $user['Username'], $user['Password'], $user['Role']);
                header('Location:HomePage.php');
                
            }
            return true;
        } else return false;
    }
}

class RegisterLogic
{
    private $username = "";
    private $password = "";
    private $email = "";

    public function __construct($formData)
    {
        $this->username = $formData['name'];
        $this->password = $formData['password'];
        $this->email = $formData['email'];
    }
    public function endsWith( $haystack, $needle) {
    $length = strlen( $needle );
    if( !$length ) {
        return true;
    }
    return substr( $haystack, -$length ) === $needle;
}

    public function insertData()
    {
        
        
        $mapper = new UserMapper();

        $useradmin = new Admin($this->username, $this->password,1,$this->email);
        if ($this->endsWith($useradmin->getEmail(), '@music.com')){
        $mapper->insertUser($useradmin);
        header('Location:HomePageAdmin.php');
        }
        else {
        $user = new SimpleUser($this->username, $this->password,0, $this->email);
        $mapper->insertUser($user);
        header("Location:HomePage.php");}
    }

}


