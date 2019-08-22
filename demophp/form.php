

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
        if (isset($_POST)) {
            print_r($_POST);
        }
       
         
    ?>

    <h3>快速测试PHP</h3>
    <form method="post" action="">
        <div> <input name="username" type="text" value=""/> </div>
        <div> 
            <input name="hobby[]" type="checkbox" value="读书"/> 读书
            <input name="hobby[]" type="checkbox" value="看报"/> 看报
            <input name="hobby[]" type="checkbox" value="游泳"/> 游泳
        </div>
        <div> <input type="submit" /> </div>
    </form>
</body>
</html>