<?php
include './conn.php';
$c1 = $db->c1;
//db.c1.update({name:"user1"},{$set:{age:300}});

$arr1 = array('name'=>'user1');
$arr2 = array('$set'=>array('age'=>30));
$opts = array('upsert'=>0,'multiple'=>1)

if($c1->update($arr1,$arr2,$opts)){
	echo "<script>
		location.href='find.php';
	</script>";	
}else{
	echo '更改失败!!';
}
?>