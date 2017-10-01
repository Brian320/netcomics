<?php
include '../core/config.php';

$username_post = $_POST["username"];
$password_post = $_POST["password"];

$options = [
	'cost' => 11,
];
$password_hash = password_hash($password_post, PASSWORD_BCRYPT, $options);
?>