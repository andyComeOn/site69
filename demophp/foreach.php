

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>快速测试php</title>

</head>

<body>
    <?php
        echo '<img src="http://139.199.23.2/img/favicon/study.png"/><br>';
        $arr = array(120, 121, 122);
        foreach ($arr as $i => $v) {
            if ($i == 1) {
                echo '第' . ($i + 1) . "个特殊的值是{$v}<br>"; 
                continue;
            }
            echo '第' . ($i + 1) . "个值是{$v}<br>"; 
        }
       
    ?>
</body>
</html>
