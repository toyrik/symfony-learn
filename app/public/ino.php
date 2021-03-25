<?php

$server = 'mysql';
$user = 'user';
$password = 'password';
$dbname = 'symfony';
try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    echo 'Подключение к базе успешно!';
} catch (PDOExeption $e) {
    echo "Error!!:" . $e->getMessage() . "<br>";
}

phpinfo();

