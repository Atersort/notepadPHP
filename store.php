<?php

$database = 'MySQL-8.2';
$db_name = "notepadPHP";
$username = "root";
$db_password = "";

$title = $_POST['title'];
$text = $_POST['text'];

try {
    $dsn = "mysql:host=$database;dbname=$db_name";
    $pdo = new PDO($dsn, $username, $db_password);

    $sql = "INSERT INTO notepad (title, text) VALUES (?, ?)";

    $statement = $pdo->prepare($sql);
    $statement->execute([$title, $text]);
    $result = $statement->fetch();

    header("Location: /index.php");

} catch (PDOException $e) {
    echo $e;
}

