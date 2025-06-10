<?php
$client_id = "X";
$client_secret = "Y";

function getToken($client_id, $client_secret)
{
    $url = "https://accounts.spotify.com/api/token";

    $headers = [
        "Authorization: Basic " . base64_encode($client_id . ":" . $client_secret),
        "Content-Type: application/x-www-form-urlencoded"
    ];

    $postfields = "grant_type=client_credentials";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    $json = json_decode($response, true);
    return $json['access_token'] ?? null;
}

$token = getToken($client_id, $client_secret);
if (!$token) {
    http_response_code(500);
    echo json_encode(["error" => "Impossibile ottenere il token"]);
    exit;
}

$query = $_GET['q'] ?? '';
$query = urlencode($query);

$search_url = "https://api.spotify.com/v1/search?type=album&q=$query";

$headers = [
    "Authorization: Bearer $token"
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $search_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

if ($httpcode == 200) {
    header('Content-Type: application/json');
    echo $response;
} else {
    http_response_code($httpcode);
    echo json_encode(["error" => "Errore nella richiesta a Spotify"]);
}
