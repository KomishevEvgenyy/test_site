<?php
if (!empty($_POST['text'])){
    $result = join('', array_reverse(preg_split('//u', $_POST['text'], -1, PREG_SPLIT_NO_EMPTY)));
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p style="text-align: center;"><?= $result ?></p>
    <p><a href="lesson_three.php">Назад</a></p>
</body>
</html>