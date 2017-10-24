<?php
  $id = $_GET['id'];  
  $mysql = new mysqli('localhost','root','','skelyfang',3306);
  $mysql->query('set names utf8');
  if ($mysql->connect_errno) {
	echo '数据库连接失败，失败信息' .$mysql->connect_errno;
	exit();   // 遇到exit下面代码不执行
  }

  $sql = "delete from students where id = $id";
  $mysql->query($sql);
  if($mysql->affected_rows){
	echo 1;
  }else{
	echo 0;
  }
  ?>