<?php
// 包含连接数据库的公共文件
require_once("./conn.php");

// 每页多少条
$pagesize = isset($_GET['pagesize']) ? $_GET['pagesize'] : 5;

// 获取地址栏的请求的页码
$page = isset($_GET['page']) ? $_GET['page'] : 1;
// 每页开始行号
$startrow = ($page - 1) * $pagesize;

// 执行查询的SQL语句
$sql = "SELECT * FROM student ORDER BY id ASC";
$result = mysqli_query($link, $sql);

// 获取学生人数
$records = mysqli_num_rows($result);

$pages =  ceil($records / $pagesize);
print_r($pages);

$sql .= " LIMIT {$startrow}, {$pagesize}";

$result = mysqli_query($link, $sql);

// select * from think_user where id=? AND status=?", [37, 37]
$tmp_sql = "SELECT * FROM student where id=37 AND age=37";
$tmp_result = mysqli_query($link, $tmp_sql);
print_r($tmp_result);
// print_r(123);
//获取所有行数据
$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($arrs);



?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>学生信息管理中心</title>
	<link rel="icon" href="http://139.199.23.2/img/favicon/study.png">
	<script src="./jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		//定义一个JS的提示函数
		function confirmDel(id) {
			//询问是否要删除？
			if (window.confirm("你真的要删除吗？")) {
				//如果单击"确定"按钮，跳转到delete.php页面
				location.href = "./delete.php?id=" + id;
			}
		}
	</script>
	<style>
		.pagelist>* {
			padding: 0 10px;
			background: #ccc;
			border: 1px solid #333;
		}
	</style>
</head>

<body>
	<div style="text-align:center;padding-bottom: 10px;">
		<h2>学生信息管理中心</h2>
		<a href="./add.php">添加学生</a>
		共有<font color="red"><?php echo $records; ?></font>个学生信息
	</div>
	<table width="700" border="1" align="center" rules="all" cellpadding="5">

		<tr bgcolor="#ccc">
			<th>编号</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>学历</th>
			<th>工资</th>
			<th>籍贯</th>
			<th>身高</th>
			<th>爱好</th>
			<th>操作选项</th>
		</tr>

		<?php
		// 循环二维数组
		foreach ($arrs as $arr) {
			?>
			<tr align="center">
				<td><?php echo $arr['id'] ?></td>
				<td><?php echo $arr['name'] ?></td>
				<td><?php echo $arr['sex'] ?></td>
				<td><?php echo $arr['age'] ?></td>
				<td><?php echo $arr['edu'] ?></td>
				<td><?php echo $arr['salary'] ?></td>
				<td><?php echo $arr['province'] ?></td>
				<td><?php echo $arr['height'] ?></td>
				<td><?php echo $arr['hobby'] ?></td>
				<td>
					<a href="">修改</a> |
					<a href="#" onclick="confirmDel(<?php echo $arr['id'] ?>)">删除</a>
				</td>
			</tr>
		<?php } ?>

		<tr>
			<td>
				分页：
			</td>
			<td>
				<select name="pageselect" id="pageselect">
					<option value="3">3</option>
					<option value="5">5</option>
					<option value="8">8</option>
					<option value="10">10</option>
				</select>
			</td>
			<td class="pagelist" colspan="9">
				<?php
				$start = 1;
				$end = $pages;
				for ($i = 1; $i <= $end; $i++) {
					if ($page == $i) {
						echo '<span>' . $i . '</span>';
					} else {
						echo '<a href="list.php?page=' . $i . '">' . $i . '</a>';
					}
				}
				?>
			</td>
		</tr>
	</table>

	<script>
		$('#pageselect').on('change', function(params) {
			console.log($("#pageselect").val());
			var v = $("#pageselect").val();
			// http: //www.php69.com:81/3-php-MVC/1-php-%E5%88%86%E9%A1%B5/list.php 4
			var _url = window.location.href.split('?')[0];
			window.location.href = _url + '?pagesize=' + v;   


		});
	</script>
</body>

</html>