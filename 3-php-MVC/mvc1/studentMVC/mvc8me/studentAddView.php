<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加学生信息</title>
    <style>
        .tabwrap {
            width: 400px;
            margin: 30px auto 0;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">添加学生信息</h2>
    <div class="tabwrap">
        <form method="post" action="?ac=insert">
            <table rules="all" border="1" cellpadding="5" width="100%">
                <tr>
                    <td>姓名</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>性别</td>
                    <td><input type="text" name="sex"></td>
                </tr>

                <tr>
                    <td>身高</td>
                    <td><input type="text" name="height"></td>
                </tr>
                <tr>
                    <td>年龄</td>
                    <td><input type="text" name="age"></td>
                </tr>

                <tr>
                    <td>学历</td>
                    <td><input type="text" name="edu"></td>
                </tr>

                <tr>
                    <td>爱好</td>
                    <td><input type="text" name="hobby"></td>
                </tr>

                <tr>
                    <td>籍贯</td>
                    <td><input type="text" name="province"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>

            </table>
        </form>
    </div>
</body>

</html>