<?php

require __DIR__ . "/config.php";

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token $token"
];

$ch = curl_init("https://api.github.com/user/repos");

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

return $ch;