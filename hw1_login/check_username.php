<?php
require_once 'connect.php';

if (!isset($_GET["q"])) {
    echo json_encode(['error' => 'Accesso non autorizzato']);
    exit();
}

header('Content-Type: application/json');

$conn = mysqli_connect(
    $dbconfig['host'],
    $dbconfig['user'],
    $dbconfig['password'],
    $dbconfig['name']
);

if (!$conn) {
    echo json_encode(['error' => 'Errore di connessione al DB']);
    exit();
}

$username = mysqli_real_escape_string($conn, $_GET["q"]);

$query = "SELECT username FROM users WHERE username = '$username'";

$res = mysqli_query($conn, $query);

if (!$res) {
    echo json_encode(['error' => mysqli_error($conn)]);
    mysqli_close($conn);
    exit();
}

echo json_encode(['exists' => mysqli_num_rows($res) > 0]);

mysqli_close($conn);
