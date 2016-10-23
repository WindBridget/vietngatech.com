<td>
<?php
$id = $_GET['id'];
$str = "DELETE FROM tbl_news WHERE id = $id";
$result = mysql_query($str);
if($result){
	echo 'Xoa thanh cong tin tuc!';
	header('location: index.php?mod=news');
}
else
	echo 'Xoa that bai!';
?>
</td>