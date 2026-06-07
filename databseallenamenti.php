<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "allenamenti";

$db = new mysqli($host, $user, $password, $dbname);

if($db->connect_error) {
    die("connessione al database fallita: " . $db->connect_error);
}

$db-> ("utf8mb4");
?>