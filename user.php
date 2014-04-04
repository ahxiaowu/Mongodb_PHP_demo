<?php
include './conn.php';
$c1 = $db->c1;

$oid = new MongoId($_GET['oid']);

$arr = array("_id"=>$oid);
$res = $c1->find($arr);
foreach($res as $v){
	echo '<pre>';
	print_r($v);
}
?>