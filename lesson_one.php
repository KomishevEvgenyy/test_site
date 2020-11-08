<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style_for_lessons.css">
    <title>Document</title>
</head>
<body>
<main>
    <?php
    for ($i=1; $i<=10; $i++){
        if ($i == 5 or $i == 10){
            echo '<div class="main main-result-5-10">';
        } else{
            echo '<div class="main">';
        }
        for ($j=1; $j<=10; $j++){
            echo "{$i} * {$j} = ".$i*$j."<br>";
        }
        echo '</div>';
    }
    ?>
</main>
<p><a href="index.php">На главную</a></p>
</body>
</html>
