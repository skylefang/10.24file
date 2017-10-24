<?php
  // 将db.php引入
  include 'db.php'; 
  $sql = "insert into students (`name`,`sex`,`age`,`phone`,`address`,`class`) values ('','',0,'','','')";
  $mysql -> query($sql);
  echo $mysql -> insert_id;
?>