<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'hw1_login_index';
$port = 3307;

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connessione al DB fallita: " . $conn->connect_error);
}
