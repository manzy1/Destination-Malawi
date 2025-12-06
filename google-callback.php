<?php
session_start();
require 'google-config.php';
require 'database.php';

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // Get user info
    $google_oauth = new Google\Service\Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    $email = $google_account_info->email;
    $name = $google_account_info->name;

    // Check if user exists in DB
    $stmt = $mysqli->prepare("SELECT * FROM authenti WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if (!$user) {
        // Create new user
        $stmt = $mysqli->prepare("INSERT INTO authenti (name, email, password) VALUES (?, ?, '')");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $user_id = $stmt->insert_id;
    } else {
        $user_id = $user['id'];
    }

    // Log in user
    $_SESSION["user_id"] = $user_id;
    $_SESSION["user_name"] = $name;

    header("Location: booking.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}