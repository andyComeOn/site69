<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>快速测试php</title>

</head>

<body>
    <?php
    echo '快速测试PHP，Hello World<br>';
    
    
    $arr = array(
        'name' => 'zhang bo',
        'age' => 12,
        'sex' => '男'
    );
    // echo count($arr);


    // for loop
    for($i=0; $i<100; $i++) $res[] = sprintf('aa%02d<br>', $i);
    echo join("<p>\n", array_map('join', array_chunk($res, 10)));


    // echo isset($b);
    // echo empty($a);
    // echo empty($b);
    // if (empty($b)) {
    //     echo 123;
    // }
    
    // unset($arr['name'], $arr['age']);
    
   
    ?>
</body>

</html>