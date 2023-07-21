<?php
session_start();
// questa è la classe con cui interagiamo col DB
class Signup extends Dbh
{

    protected function setUser($name, $username, $password, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, name, password, email, role) VALUES (?,?,?,?,0);');

        $hashedpsw = password_hash($password, PASSWORD_DEFAULT);

        var_dump($name, $username, $hashedpsw, $email); //var_dump

        if (!$stmt->execute(array($name, $username, $hashedpsw, $email))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($name, $email, $username)
    {
        $stmt = $this->connect()->prepare('SELECT name, username FROM users WHERE name = ? OR username = ? OR email = ?;');

        var_dump($name, $email, $username); // var_dump

        $stmt->execute(array($name, $email, $username));

        if ($stmt->errorInfo()[0] !== '00000') {
            throw new Exception('Failed to execute statement: ' . $stmt->errorInfo()[2]);
        }

        $userExists = $stmt->rowCount() > 0;
        $stmt->closeCursor();

        return !$userExists;
    }
}
