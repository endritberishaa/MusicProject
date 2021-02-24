
<?php

class Contact
{
    public function __construct($username,  $email, $message)
    {
        $this->username = $username;
        $this->email = $email;
        $this->message = $message;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getMessage()
    {
        return $this->message;
    }
}
