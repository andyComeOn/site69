<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC实例：学生信息管理-展示学生信息列表</title>
    <link rel="shortcut icon" type="" href="http://139.199.23.2/img/favicon/study.png" />
    <style>
        .tabwrap {
            width: 600px;
            margin: 30px auto 0;
        }
    </style>
</head>
<body>
    <h2>MVC实例：学生信息管理-展示学生信息列表</h2>
    <?php
        // echo $arrs;
        // print_r($arrs);
        
    
    ?>
    <div class="tabwrap">

    
        <table rules="all" border="1" cellpadding="5" width="100%">
            <tr>
                <th>编号</th>
                <th>姓名</th>
                <th>性别</th>
                <th>身高</th>
                <th>年龄</th>
                <th>学历</th>
                <th>爱好</th>
                <th>籍贯</th>    
            </tr>
            <?php 
                
                foreach($arrs as $index => $arr) { 
                    echo "<tr><td>{$arr['id']}</td><td>{$arr['name']}</td><td>{$arr['sex']}</td>" . 
                        "<td>{$arr['height']}</td><td>{$arr['age']}</td><td>{$arr['edu']}</td> " .
                        "<td>{$arr['hobby']}</td><td>{$arr['province']}</td></tr>"; 
                }
                    

            
            
            ?>

            
        </table>
    </div>
</body>
</html>