<?php
/*new mysqli(host:'localhost',username:'root',passwd:'',dbname:'skelyfang',port:3306); 主机名，用户名，密码，库名，端口号*/
// 设置头信息 解决乱码问题 整个页面显示
header('Content-type:text/html;charset=utf—8');
// 1.连接数据库
$mysql = new mysqli('localhost','root','','skelyfang',3306);
// 设置查询时字符集
$mysql->query('set names utf8');
// 判断数据库是否连接失败
if ($mysql->connect_errno) {
	echo '数据库连接失败，失败信息' .$mysql->connect_errno;
	exit;   // 遇到exit下面代码不执行
}
// 查询
$sql = "select * from students";
// 执行上面的sql语句 query回来result 为结果集 
$result = $mysql->query($sql);
// 把结果集变成关联数组，如果为索引数组数据库中的字段就成了数字无法使用
$data = $result->fetch_all(MYSQL_ASSOC);
// 查看内容 打印
// var_dump($data);
// 返回json对象
echo json_encode($data);

?>