<?php
include './conn.php';
$c1 = $db->c1;
//db.c1.insert({name:"user2",age:30,sex:"nan"});
$arr = array("name"=>"user2","age"=>30,"sex"=>"nan");
if($c1->insert($arr)){
	echo "<script>
		location.href='find.php';
	</script>";
}else{
	echo '失败!';
}
?>
