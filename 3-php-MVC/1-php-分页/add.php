<?php
//包含连接数据库的公共文件
require_once("./conn.php");



//判断表单是否合法提交(防止黑客攻击)
if (isset($_POST['token']) && $_POST['token'] == "add") {
	//获取表单提交数据
	$name	= $_POST['name'];
	$sex	= $_POST['sex'];
	$age 	= $_POST['age'];
	$edu 	= $_POST['edu'];
	$salary = $_POST['salary'];
	// $bonus 	= $_POST['bonus'];
	$city 	= $_POST['province'];
	$height 	= $_POST['height'];
	$hobby 	=  implode(',',$_POST['hobby']);


	//构建插入的SQL语句
	$sql = "INSERT into student VALUES(null,'$name','$sex',$age,'$edu',$salary,'$city',$height,'$hobby')";
	
	// print_r($sql);
	// die();
	//判断SQL语句是否执行成功

	if (mysqli_query($link, $sql)) {
		echo "<h2>记录添加成功！</h2>";
		//告诉浏览器执行代码：等待3秒，并跳转到list.php文件
		header("refresh:3;url=./list.php");
		die(); //中止程序向下运行
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>学生信息管理中心</title>
	<link rel="icon" href="http://139.199.23.2/img/favicon/study.png">
</head>

<body>
	<div style="text-align:center;padding-bottom: 10px;">
		<h2>学生信息管理中心——添加学生</h2>
		<a href="./list.php">返回</a>
	</div>

	<form method="post" action="">
		<table width="400" bordercolor="#ccc" border="1" rules="all" align="center" cellpadding="5">
			<tr>
				<td width="80" align="right">姓名：</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td width="80" align="right">性别：</td>
				<td>
					<input type="radio" name="sex" value="男" checked>男
					<input type="radio" name="sex" value="女">女
					<input type="radio" name="sex" value="未知">未知
				</td>
			</tr>
			<tr>
				<td width="80" align="right">年龄：</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td width="80" align="right">学历：</td>
				<td>
					<select name="edu">
						<option value="初中">初中</option>
						<option value="高中">高中</option>
						<option value="大专" selected="selected">大专</option>
						<option value="本科">本科</option>
						<option value="研究生">研究生</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="80" align="right">工资：</td>
				<td><input type="text" name="salary"></td>
			</tr>

			<tr>
				<td width="80" align="right">籍贯：</td>
				<td><input type="text" name="province"></td>
			</tr>
			<tr>
				<td width="80" align="right">身高：</td>
				<td><input type="text" name="height"></td>
			</tr>
			<tr>
				<td width="80" align="right">爱好：</td>
				<td>
					<input type="checkbox" name="hobby[]" value="爬山">爬山
					<input type="checkbox" name="hobby[]" value="看电影">看电影
					<input type="checkbox" name="hobby[]" value="游泳">游泳
				
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="提交">
					<input type="hidden" name="token" value="add">
					<input type="reset" value="重置">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>