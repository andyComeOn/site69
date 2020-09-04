<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>快速测试php</title>

</head>

<body>
    <?php
    echo '快速测试PHP';
    echo '<br>';
    
    echo rand(1.0, 50.0);
    echo '<br>';
    echo date('Y-m-d H:i:s', 1425022980);
    echo '<br>';
    $ret=1;
    // var_dump($ret);
    if (isset($ret)) {
        echo 90;
    }

    
   

    ?>

    <script>
    var unixTimestamp = new Date(1425022980000);
    console.log(unixTimestamp.toLocaleString())

    var s = '123';
    console.log(s.toLowerCase());
    
        
    </script>
</body>

</html>