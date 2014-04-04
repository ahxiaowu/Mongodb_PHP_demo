<?php
include './conn.php';
$c1 = $db->c1;
//db.c1.remove({name:"user2"});

$arr = array("name"=>"user2");
if($c1->remove($arr)){
	echo "<script>
		location.href='find.php';
	</script>";	
}else{
	echo "删除失败!!";
}
?>