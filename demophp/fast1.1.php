<?php
// echo '快速测试PHP<br>'; 不能输出内容，否则直接在你的引入的html文件中的body添加了节点且head为空。
// $this->assign('a', $a); 不能把变量输出到变量模板，必须在类中才能使用$this

$arr = array(
    'name' => 'andy',
    'age' => 19
);


include('./fast1.html');

?>

<!-- <div class="wrap" style="margin: 10px auto;">
    欢迎你，<?php echo $arr['name']; ?>。
</div> -->