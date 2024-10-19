<?php

$database = 'MySQL-8.2';
$username = "root";
$db_password = "";
$db_name = "notepadPHP";

try {
    $prepare = "mysql:host=$database;dbname=$username;dbname=$db_password;";
    $pdo = new PDO($prepare);
    $sql = "SELECT * FROM $db_name";
    $request = $pdo->query($sql);
    $result = $pdo->prepare($request);
    $result->execute();
} catch (PDOException $e) {
    echo "Ошибка: $e";
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
    <link rel="stylesheet" href="styletyle.css">


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
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Первая запись</td>
            <td>
                <a class="btn btn-danger btn-sm m-1">Удалить</a>
                <a class="btn btn-warning btn-sm m-1">Изменить</a>
                <a class="btn btn-info btn-sm m-1">Читать</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Вторая запись</td>
            <td>
                <button class="btn btn-danger btn-sm">Удалить</button>
                <button class="btn btn-warning btn-sm">Изменить</button>
                <button class="btn btn-info btn-sm">Читать</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>


</body>
</html>
