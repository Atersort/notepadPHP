<?php

$database = 'MySQL-8.2';
$db_name = "notepadPHP";
$username = "root";
$db_password = "";

try {
    $dsn = "mysql:host=$database;dbname=$db_name";
    $pdo = new PDO($dsn, $username, $db_password);
    $sql = "SELECT * FROM notepad";
    $request = $pdo->query($sql);
    $result = $request->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Ошибка: {$e->getMessage()}";
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">


</head>
<body>
<header>

</header>

<div class="container mt-5">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th>№</th>
            <th>Заголовок</th>
            <th>Текст</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $countArray = 0;
            foreach ($result as $elem): ?>
            <td><?php
                echo $countArray += 1;
                ?>
            </td>
            <td><?= $elem['title']   ?></td>
            <td><?= $elem['text'] ?></td>
            <td>
                <a href="./read.php" class="btn btn-warning btn-sm m-1">Читать</a>
                <a class="btn btn-danger btn-sm m-1">Удалить</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


</body>
</html>
