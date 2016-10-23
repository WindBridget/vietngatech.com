<td>
<?php
$id = $_GET['id'];
$str = "DELETE FROM tbl_group_news WHERE id = $id";
$result = mysql_query($str);
if($result){
	echo 'Xoa thanh cong nhom tin tuc!';
	header('location: index.php?mod=news&act=list_category');
}
else
	echo 'Xoa that bai!';
?>
</td>