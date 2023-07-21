<?php
session_start();

require_once('../classes/dbh.classes.php');
require_once('../classes/signup.classes.php');
require_once('../classes/signupcontr.classes.php');


if (isset($_POST['submit'])) {

    // piglio i dati
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passconfirm = $_POST['password_confirmation'];
    $email = $_POST['email'];

    // istanziamo la classe
    $signup = new SignupContr($username, $name, $password, $passconfirm, $email);
    $_SESSION['success_message'] = "Registration successful!";

    // error handlers
    $signup->signupUser();

    // torniamo alla pagina iniziale
    header('location: ../index.php?error=none');
}
