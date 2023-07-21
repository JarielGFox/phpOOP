<?php
session_start();

class SignupContr extends Signup
{
    private $name;
    private $username;
    private $password;
    private $passconfirm;
    private $email;

    public function __construct($name, $username, $password, $passconfirm, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->passconfirm = $passconfirm;
        $this->email = $email;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            header('location: ../index.php?error=emptyinput');
            exit();
        }

        if ($this->invalidUser() == false) {
            header('location: ../index.php?error=emptyusername');
            exit();
        }

        if ($this->invalidName() == false) {
            header('location: ../index.php?error=emptyusername');
            exit();
        }

        if ($this->invalidEmail() == false) {
            header('location: ../index.php?error=email');
            exit();
        }


        if ($this->pwdMatch() == false) {
            header('location: ../index.php?error=passwordmatch');
            exit();
        }


        if ($this->TakenUser() == false) {
            header('location: ../index.php?error=userormailtaken');
            exit();
        }

        if ($this->TakenUser() == false) {
            header('location: ../index.php?error=userormailtaken');
            exit();
        }

        $this->setUser($this->name, $this->username, $this->password, $this->email);
    }

    private function emptyInput()
    {
        return !(empty($this->name) || empty($this->password) || empty($this->username) || empty($this->passconfirm) || empty($this->email));
    }

    private function invalidUser()
    {
        return preg_match("/^[a-zA-Z0-9]*$/", $this->username);
    }

    private function invalidName()
    {
        return preg_match("/^[a-zA-Z0-9]*$/", $this->name);
    }

    private function invalidEmail()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    private function pwdMatch()
    {
        return $this->password === $this->passconfirm;
    }

    private function TakenUser()
    {
        $result = $this->checkUser($this->name, $this->username, $this->email);
        return $result;
    }
}
