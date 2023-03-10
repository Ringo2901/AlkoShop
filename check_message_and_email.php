<?php
include ('email_checker.php');

$message = $_POST['message'];
$name = $_POST['name'];

$message = preg_replace('/(https?:\/\/(?!bsuir\.by)[^\s]+)/', '#Внешние ссылки запрещены#', $message);


$data = $name . ': ' . $message . PHP_EOL;


file_put_contents('reviews.txt', $data, FILE_APPEND | LOCK_EX);


header('Location: Contacts.php');
exit();
?>