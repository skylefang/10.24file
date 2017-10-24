<?php

/**
 * @Author: DELL-PC
 * @Date:   2017-10-24 09:58:49
 * @Last Modified by:   DELL-PC
 * @Last Modified time: 2017-10-24 10:27:41
 */
$mysql = new mysqli('localhost','root','','skelyfang',3306);
  $mysql->query('set names utf8');
  if ($mysql->connect_errno) {
	echo '数据库连接失败，失败信息' .$mysql->connect_errno;
	exit();   // 遇到exit下面代码不执行
  }
?>