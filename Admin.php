<?php
require_once 'Person.php';


class Admin extends Person

{
    private $email;
    public function __construct($username, $password, $role, $email)
    {
        parent::__construct($username, $password, $role, $email); 
        $this->email = $email;
    }

    public function setSession()
    {

        $_SESSION["role"] = 1;
        $_SESSION['roleName'] = "Administrator";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }
}