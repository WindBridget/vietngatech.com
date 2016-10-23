<td>
<?php
$id = $_GET['id'];
$str = "DELETE FROM tbl_slides WHERE id = $id";
$result = mysql_query($str);
if($result){
	echo 'Xoa thanh cong!';
	header('location: index.php?mod=slides');
}
else
	echo 'Xoa that bai!';
?>
</td>