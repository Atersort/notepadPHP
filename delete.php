<?php

$id = $_GET['id'];
$database = 'MySQL-8.2';
$db_name = "notepadPHP";
$username = "root";
$db_password = "";


try {
    $dsn = "mysql:host=$database;dbname=$db_name";
    $pdo = new PDO($dsn, $username, $db_password);

    $sql = "DELETE FROM notepad WHERE id=?";

    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);

    header("Location: index.php");

} catch (PDOException $e) {
    echo $e->getMessage();
}