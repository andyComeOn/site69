<?php

namespace Admin\Model;

use \Frame\Libs\BaseModel;
//定义UserModel类
final class UserModel extends BaseModel
{
	//受保护的数据表名称
	protected $table = "user";

	//登录更新
	public function loginUpdate($data, $id)
	{
		//构建更新的字符串
		$str = "";
		foreach ($data as $key => $value) {
			$str .= "$key='$value',";
		}
		//更新登录次数
		$str .= "login_times=login_times+1";
		//构建更新的SQL语句
		$sql = "UPDATE {$this->table} SET {$str} WHERE id={$id}";
		// 此处输出echo ，会暂停程序执行吗？
		// UPDATE user SET last_login_ip='127.0.0.1',last_login_time='1570776069',login_times=login_times+1 WHERE id=1

		// echo $sql;
		return $this->pdo->exec($sql);
	}
}
