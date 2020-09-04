<?php
// echo '快速测试PHP<br>'; 不能输出内容，否则直接在你的引入的html文件中的body添加了节点且head为空。
// $this->assign('a', $a); 不能把变量输出到变量模板，必须在类中才能使用$this

$arr = array(
    'name' => 'andy',
    'age' => 19
);

list($msec, $sec) = explode(' ', microtime()); // 类似于js的解构

// floatval 是 php 的函数
$msectime = (float) sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000); // 该网友自创，为啥要加(float)

echo $msectime . '++';

echo microtime() . '-' . date('Y-m-d H:i:s', time());
echo '<br>';


$abc = sprintf('%e', 12345.6789);
echo $abc;
echo '<br>';



// include('./fast1.html');

?>

<script>
    var o = new Date();
    console.log(o, o.getTime());
</script>

<!-- <div class="wrap" style="margin: 10px auto;">
    欢迎你，<?php echo $arr['name']; ?>。
</div> -->