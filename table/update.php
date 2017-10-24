<?php

header('Content-type:text/html;charset=utf—8');
$mysql = new mysqli('localhost','root','','skelyfang',3306);
$mysql->query('set names utf8');
if ($mysql->connect_errno) {
	echo '数据库连接失败，失败信息' .$mysql->connect_errno;
	exit();   // 遇到exit下面代码不执行
}
// 接收数据 值 类型 id  从前台接收数据
// $_GET $_POST这两个必须得一一对应的接收  $_REQUEST不管前台是什么发送的都可以接收
$value = $_GET['value'];
$info = $_GET['info'];
$id = $_GET['id'];

// 双引号   '$value'值要加引号
$sql = "update students set $info = '$value' where id = $id";
$mysql->query($sql);
// affected_rows  影响行数用来判断php是否操作成功
if($mysql->affected_rows){
	echo true;
}else{
	echo false;
} 