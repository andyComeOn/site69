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
    <!-- https://www.w3school.com.cn/tiy/s.asp?f=demo_php_func_strtotime strtotime 函数，此页面使用模拟光标  -->
    <?php
    echo 'PHP与js时间转换';
    echo '<br>';
    echo time(); // 获取时间戳
    echo '<br>';
    echo date("Y-m-d H:i:s", time()); // date第二次参数是时间戳，默认是当前时间，可赋值其他时间。
    echo '<br>';
    // 1582602969-2020/02/25 11:56:09
    echo date("2020/02/25 11:56:09");  // 具体某一时间，可转为时间戳
    echo '<br>';
    // echo strtotime(date("2020/02/25 11:56:09"));  // 具体某一时间，可转为时间戳
    echo strtotime("2020-02-25 11:56:09");  

    // php中使用 strtotime 转为时间戳，可接受的模式有：strtotime("20200225 11:56:09")、strtotime("2020-02-25 11:56:09")、strtotime("2020/02/25 11:56:09")，不能是strtotime("2020.02.25 11:56:09")，一般使用 - 连字符多谢！

    


    ?>

    <script>
        var str = '2020/02/25 11:56:09';
        var d = new Date(str);
        // parseInt(new Date().getTime()/1000)
        console.log(d);
        console.log(d.getTime() / 1000);
    </script>
</body>

</html>