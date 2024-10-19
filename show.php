<?php
$id = $_GET['id'];

if (empty($_GET['id'])) {
    header("Location: index.php");
} else {

    $database = 'MySQL-8.2';
    $db_name = "notepadPHP";
    $username = "root";
    $db_password = "";

    try {
        $dsn = "mysql:host=$database;dbname=$db_name";
        $pdo = new PDO($dsn, $username, $db_password);
        $sql = "SELECT * FROM notepad WHERE id=?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        $result = $statement->fetch();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="./image/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<div class="wrapper">
    <h1 class=""><?= $result['title']?></h1>
    <div>
        <a href="/" class="btn btn-primary">Главная</a>
        <a href="/update.php<?=$id?>" class="btn btn-success">Изменить</a>
        <a href="delete.php?id=<?=$id?>" class="btn btn-danger">Удалить</a>
    </div>
<p><?= $result['text'] ?></p>
</div>
</html>
