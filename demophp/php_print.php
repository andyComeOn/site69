
<?php

    $a = 110;
    $a1 = var_export($a, true);
    // print_r($a1);

    $arr = array(1, 2, 3);
    $str1 = var_export($arr, true);

    $str = '';

    $str .= '<table border="1" rules="all" cellpadding="5">';
    $str .= '<tr><th>打印方法</th><th>打印效果</th><th>打印方法</th><th>打印效果</th></tr>';
    $str .= '<tr><td>var_dump($a)</td><td>' .  $a . '</td><td>var_dump($arr)</td><td>' . $str1 . '</td></tr>';
    $str .= '</table>';
    
    echo <<<EOF
        $str
EOF;

    echo '<hr>';

    print <<<EOF
        <table border="1" rules="all" cellpadding="5">
            <tr>
                <th>打印方法</th>
                <th>打印效果</th>
                <th>打印方法</th>
                <th>打印效果</th>
            </tr>
            <tr>
                <td>var_dump(\$a)</td>
                <td>$a1</td>
                <td>var_dump(\$arr)</td>
                <td>$str1</td>
            </tr>
        </table>
EOF;

?>


<?php
    // 这是php一种打印方式，类似于es6的``
    $v = 2;
    print <<<EOF
    "abc"$v"123"
EOF;
    echo '<hr>';
?>

<?php
    $out = <<<EOF
    <a href="javascript:edit('asd', 'aaa')">编辑</a> |
    <a href="javascript:confirmurl('?m=admin&posid=12')">删除</a> |
    <a href="javascript:preview('3','ds')"><font color="green">演示</font></a>
EOF;
    echo $out;
    echo '<hr>';
?>

<script>
    function edit(m,n) {
        console.log(m,n);
    }

    function confirmurl(v) {
        console.log(v);
    }

    function preview(m,n) {
        console.log(m,n);
    }
</script>

<?php
    $name = '浅水游';
    //下面<<<EOT后面不能有空格
    print <<<EOT
        <!--12321-->
        <p>Hello,{$name}!</p>
        <p>Hello,$name!</p>    
EOT;
    print '<hr>';
?>


