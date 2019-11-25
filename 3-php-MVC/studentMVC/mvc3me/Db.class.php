<?php
class Db {
    // 私有静态报存对象
    private static $obj = null;

    // 私有db相关信息
    private $db_host;
    private $db_user;
    private $db_pwd;
    private $db_name;
    private $charset;
    private $link;
    
    // 私有的构造方法，阻止类外new对象
    private function __construct($config = array()) {
        $this->db_host = $config['db_host'];
        $this->db_user = $config['db_user'];
        $this->db_pwd = $config['db_pwd'];
        $this->db_name = $config['db_name'];
        $this->charset = $config['charset'];

        $this->connectDb(); // 连接服务器
        $this->selectDb(); // 选择数据库
        $this->setCharset(); // 设置字符集
    }

    // 私有克隆方法，阻止类外 clone 对象
    private  function __clone() {
        # code...
    }

    // 公共静态创建对象方法
    public static function getInstance($config = array()) {
        // 判断当前对象是否存在
        if (!self::$obj instanceof self) {
            // 不存在，创建并保存它
            self::$obj = new self($config);
        }
        // 抛出对象
        return self::$obj;
    }

    // 私有的连接数据库方法
    private function connectDb() {
        if (!$this->link = @mysqli_connect($this->db_host, $this->db_user, $this->db_pwd)) {
            echo "连接mysql数据库失败";
            exit();
        }
    }

    // 私有的选择数据库方法
    private function selectDb() {
        if (!mysqli_select_db($this->link, $this->db_name)) {
            echo "选择数据库{$this->db_name}失败";
            die();
        }
    }

    // 私有设置数据库字符集
    private function setCharset() {
        mysqli_set_charset($this->link, $this->charset);
    }

    // 公共的执行sql语句的方法：insert、update、delete、drop、set 等
    // 执行成功返回 true，失败返回 false
    public function exec($sql) {
        // 将sql语句转变为小写
        $sql = strtolower($sql);
        // 判断是不是合法的sql语句
        if (substr($sql, 0, 6) == 'selcet') {
            echo "不能执行 select 语句！";
            exit();
        }

        // 抛出执行 bool 结果
        return mysqli_query($this->link, $sql);
    }

    // 私有的查询数据库的方法，成功返回：结果集对象，失败返回false
    private function query($sql) {
        $sql = strtolower($sql);

        // 判断是不是合法的select语句
        if (substr($sql, 0, 6) != 'select') {
            echo "sql语句非查询语句";
            die();
        }
        return mysqli_query($this->link, $sql);
    }

    // 公共的获取单行数据的方法
    public function fetchOne($sql, $type=3) {
        // 执行sql语句
        $result = $this->query($sql);

        // 定义返回数组类型的常量
        $types = array(
            1 => MYSQLI_NUM,
            2 => MYSQLI_BOTH,
            3 => MYSQLI_ASSOC
        );

        // 返回一维数组
        return mysqli_fetch_array($result, $types[$type]);
    }

    // 公共的获取所有的数据方法
    public function fetchAll($sql, $type = 3) {
        // 执行sql语句
        $result = $this-> query($sql);

        // 定义返回数组类型的常量
        $types = array(
            1 => MYSQLI_NUM,
            2 => MYSQLI_BOTH,
            3 => MYSQLI_ASSOC
        );

        // 返回所有的数据
        return mysqli_fetch_all($result, $types[$type]);
    }

    // 获取记录 total 数
    public function rowCount($sql) {
        // 执行sql语句
        $result = $this-> query($sql);
        return mysqli_num_rows($result);
    }

    // 公共的析构方法
    public function __destruct() {
        // 断开mysql连接
        mysqli_close($this->link);
    }
}