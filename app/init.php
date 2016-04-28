<?php

//start the session

session_start();
//set session variables.

$_SESSION ['user_id'] = 1;

$db = new PDO ('mysql:dbname=testa;host=localhost','root','');
//mysqli()

if (!isset($_SESSION['user_id'])) {

    die("You are not signed in.");

}

?>
