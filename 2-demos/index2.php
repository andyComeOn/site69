<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <title>PHP的form测试</title>

</head>

<body>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        print_r($_POST);
    }

    echo '--';

    if (isset($_GET) && !empty($_GET)) {
        print_r($_GET);
    }

    $arr = array(0 => 123);
    print empty($arr);

    ?>


    <h3>快速测试PHP</h3>

    <!-- Content-Type: application/x-www-form-urlencoded -->
    <!-- enctype="application/x-www-form-urlencoded" -->
    <!-- enctype="application/form-data" -->
    <form method="post" action="" enctype="multipart/form-data">
        <div> <input name="username" type="text" value="" autocomplete="off"/> </div>
        <div>
            <input name="hobby[]" type="checkbox" value="读书" /> 读书
            <input name="hobby[]" type="checkbox" value="看报" /> 看报
            <input name="hobby[]" type="checkbox" value="游泳" /> 游泳
        </div>
        <div> <input type="submit" /> </div>
    </form>


    <!-- <form action="/xxxx" method="post" enctype="application/x-www-form-urlencoded">
        username: <input type="text" name="username"><br>
        password: <input type="text" name="password"><br>
        <input type="submit" value="提交">
    </form> -->

</body>

</html>