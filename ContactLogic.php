<?php
include_once 'Contact.php';
require_once 'UserMapper.php';
session_start();
//main

if (isset($_POST['contactbtn'])) {
    $contact = new ContactLogic($_POST);
    $contact->insertContact($contact);
} else {
    header("Location:ContactUsPage.php");
}


class ContactLogic
{
    private $username = "";
    private $email = "";
    private $message = "";

    public function __construct($formData)
    {
        $this->username = $formData['name'];
        $this->email = $formData['email'];
        $this->message = $formData['message'];

    }

        public function insertContact()
    {
        $user = new Contact($this->username, $this->email, $this->message);

        $mapper = new UserMapper();
        $mapper->insertContact($user);
        header("MusicPage.php");
    }
 }


