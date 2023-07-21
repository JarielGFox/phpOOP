<?php
require_once('../classes/dbh.classes.php');
require_once('../classes/login.classes.php');
require_once('../classes/logincontr.classes.php');

if (isset($_POST['submit'])) {

    //prendiamo i dati necessari al login
    $username = $_POST['username'];
    $password = $_POST['password'];

    //istanziamo la classe
    $login = new LoginContr($username, $password);

    //error handlers
    $login->loginUser();

    //back alla pagina iniziale
    header('location: ../index.php?error=none');
}
