

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php数组</title>

</head>

<body>
    <?php
        // 关联数组索引要用引号包裹。
        // $arrs = ['1-1', '2-2'];
        
        // unset($arrs['1-1']);

        $arrs = array( 
            'name' => 'andy',
            'age' => 14
        );
        // $arrs = ['a', 'b'];
        unset($arrs['name']);
        

        print_r($arrs);
        // 该例子说明了，单引号不能引入变量。
    ?>
</body>
</html>