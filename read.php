<?php
$id=

$database = 'MySQL-8.2';
$db_name = "notepadPHP";
$username = "root";
$db_password = "";

try {
    $pdo = new PDO();
    $sql = "SELECT * FROM notepad WHERE id=$id";
} catch (PDOException $e) {
    echo $e->getMessage();
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
</head>
<body>

</body>
</html>
