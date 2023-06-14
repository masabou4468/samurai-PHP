<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
    <p>
        <?php
        $onion_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];


        foreach($onion_data as $key => $valuse){
            echo "{$key}：{$valuse}<br>";
        }
        ?>
    </p>
</body>

</html>