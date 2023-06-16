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


        foreach($onion_data as $key => $valuse){    // 20230616funatsu_間違いではありませんが、値の変数名はvalueで良いです（一つの情報を表すため）
            echo "{$key}：{$valuse}<br>";
        }
        ?>
    </p>
</body>

</html>
