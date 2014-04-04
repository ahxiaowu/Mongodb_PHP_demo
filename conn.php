<?php
$conn = new Mongo("mongodb://user1:123@locahost:27017/test");
//$conn->connected;
$db   = $conn->test; # 取名称为 "test" 的数据库
?>