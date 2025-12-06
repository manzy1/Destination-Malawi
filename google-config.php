<?php
require_once 'vendor/autoload.php';

$client = new Google\Client();
$client->setClientId('YOUR_GOOGLE_CLIENT_ID');
$client->setClientSecret('YOUR_GOOGLE_CLIENT_SECRET');
$client->setRedirectUri('http://localhost/your_project_path/google-callback.php');
$client->addScope('email');
$client->addScope('profile');
?>