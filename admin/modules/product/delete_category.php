<td>
<?php
$id = $_GET['id'];
$str = "DELETE FROM tbl_group_product WHERE id = $id";
$result = mysql_query($str);
if($result){
	echo 'Xoa thanh cong nhom san pham!';
	header('location: index.php?mod=product&act=list_category');
}
else
	echo 'Xoa that bai!';
?>
</td>