<?php
include './conn.php';
$c1 = $db->c1; //到c1集合
//db.c1.find({name:"user1"});
//{name:"user1"} == array("name"=>"user1");
//[1,2] == array(1,2);

/*
$arr = array(); //类似{}全取出来
$res = $c1->find($arr);
foreach($res as $v){
	$oid = $v['_id'];
	echo '<pre>';
	print_r($v);
}
*/

#$arr = array("name"=>"user1");
$arr = array();
$res = $c1->find($arr);
foreach($res as $v){
	$oid = $v['_id'];
	echo "<a href='user.php?oid'=$oid>".$v['name']."</a><hr />";
	#echo '<pre>';
	#print_r($v);
}
?>