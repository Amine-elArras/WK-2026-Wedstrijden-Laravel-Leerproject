<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.football-data.org/v4/competitions/WC/matches?season=2026");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CAINFO, 'C:/xampp/php/cacert.pem');
$result = curl_exec($ch);

if ($result === false) {
    echo curl_error($ch);
} else {
    echo "SSL werkt";
}

curl_close($ch);