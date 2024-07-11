<?php


$ch = require "init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/{$_GET["full_name"]}");
// NO CONFIRMATION FOR DELETE
// DISABLED FOR SAFETY
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");


$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);



curl_close($ch);

$data = json_decode($response, true);


if ($status_code !== 204) {
    echo "Unexpected status code: $status_code";
    var_dump($data);
    exit;
}
?>

<?php require "header.html" ?>

<h1>Delete Repository</h1>

<p>Repository deleted successfully.
    <a href="index.php">Home</a>
</p>

<?php require "footer.html" ?>