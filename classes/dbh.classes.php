<?php
session_start();
class Dbh
{
    protected function connect()
    {
        // impostiamo i parametri del DB
        $db_engine = 'mysql';
        $db_host = 'localhost';
        $db_name = 'test_register';
        $db_user = 'root';
        $db_password = 'root';

        // creiamo la data source name con i dati di cui sopra
        $dsn = "$db_engine:host=$db_host;dbname=$db_name";

        try {
            // creiamo una nuova istanza della PDO passando le variabili al costruttore
            $dbh = new PDO($dsn, $db_user, $db_password);
            // nel qual caso avremo errori saranno gestiti dagli attributi ATTR_ERRMODE e ERRMODE_EXCEPTION
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . '<br />';
            var_dump($e); // var_dump
            die();
        }
    }
}
