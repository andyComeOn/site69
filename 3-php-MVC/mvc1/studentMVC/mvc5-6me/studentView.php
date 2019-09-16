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

        tr {
            text-align: center;
        }
    </style>
</head>

<body>
    <div style="text-align: center">
        <a href="./StudentController.class.php">学生管理</a> |
        <a href="./NewsController.class.php">新闻管理</a>
    </div>

    <h2 style="text-align: center;">MVC实例：学生信息管理-展示学生信息列表</h2>
    <h2 style="text-align: center;"><a href="?ac=add">添加学生</a><span>共有5个学生</span>  </h2>
    <?php
    // echo $arrs;
    // print_r($arrs);
    ?>

    <script>
        // 删除操作函数
        // ac是action的简写，代表用户操作
        // "?"之前省略了当前控制器文件名StudentController.php
        function confirmDel(id) {
            if (window.confirm('真的要删除吗？')) {
                window.location.href = "?ac=delete&id=" + id;
            }
        }
    </script>

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
                <th>操作</th>
            </tr>
            <?php foreach ($arrs as $index => $arr) { ?>
                <tr>
                    <td><?php echo $arr['id']; ?></td>
                    <td><?php echo $arr['name']; ?></td>
                    <td><?php echo $arr['sex']; ?></td>
                    <td><?php echo $arr['height']; ?></td>
                    <td><?php echo $arr['age']; ?></td>
                    <td><?php echo $arr['edu']; ?></td>
                    <td><?php echo $arr['hobby']; ?></td>
                    <td><?php echo $arr['province']; ?></td>
                    <td><a href="javascript: void(0);">修改</a>| <a href="javascript: void(0);" onclick="confirmDel(<?php echo $arr['id']; ?>)">删除</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>