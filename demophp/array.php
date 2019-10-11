

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>php数组</title>

</head>

<body>
    <?php
       
        $arrs = array('andy', 'jim', 'tom');
        print_r($arrs);
        foreach($arrs as $v) {
            echo $v . '<br>';
        }
    ?>
</body>
</html>