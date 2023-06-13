<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
    <p>
        <?php

        $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60, 80];
        $total = 0;

        for($i = 0; $i < count($scores); $i++){
            $total = $total + $scores[$i];
        }

        echo $total;

        echo '<br>';

        echo $total / count($scores);
        ?>
    </p>
</body>

</html>