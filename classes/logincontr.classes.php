<?php

class LoginContr extends Login
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser()
    {

        if ($this->emptyInput() == false) {
            header('location: ../index.php?error=emptyinput');
            exit();
        }

        $this->getUser($this->username, $this->password);
    }

    private function emptyInput()
    {
        return !(empty($this->password) || empty($this->username));
    }
}
