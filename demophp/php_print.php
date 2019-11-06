
    <?php
    $a = 110;
    $arr = array(1, 2, 3);

    $str1 = var_export($arr, true);

    $str = '';

    $str .= '<table border="1" rules="all" cellpadding="5">';
    $str .= '<tr><th>打印方法</th><th>打印效果</th><th>打印方法</th><th>打印效果</th></tr>';
    $str .= '<tr><td>var_dump($a);</td><td>' .  $a . '</td><td>var_dump($arr);</td><td>' . $str1 . '</td></tr>';


    $str .= '</table>';
    // echo $str;
    echo <<<EOF
    $str
EOF;
    ?>
