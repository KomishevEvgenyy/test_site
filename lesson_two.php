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
            $result = $i * $j;
            if ($result >= 10){
                $result = (string)$result;
                $firstNumber = "<span class=\"color-red\">{$result[0]}</span>";
                $secondNumber = "<span class=\"color-green\">{$result[1]}</span>";
                $thirdNumber = isset($result[2]) ? "<span class=\"color-red\">{$result[2]}</span>" : "";
                echo "<span class=\"color-yellow\">{$i}</span> * <span class=\"color-blue\">{$j}</span> = 
                {$firstNumber}{$secondNumber}{$thirdNumber}<br>";

            } else{
                $result = "<span class=\"color-red\">{$result}</span>";
                echo "<span class=\"color-yellow\">{$i}</span> * <span class=\"color-blue\">{$j}</span> = {$result}<br>";
            }
        }
        echo '</div>';
    }
    ?>
</main>
<p><a href="index.php">На главную</a></p>
</body>
</html>