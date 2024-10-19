<?php

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
    <div class="container">
        <h1>Создание заметки</h1>
        <form action="" method="post">
            <div><input type="text" name="title" value="<?= '' ?? $_POST['title'] ?>"></div>
            <div>
                <textarea class="my-2" name="" id="" cols="70" rows="10"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>
    </div>
</div>
</body>
</html>
