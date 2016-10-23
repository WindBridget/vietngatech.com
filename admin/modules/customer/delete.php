<td>
<?php
$cid = $_GET['cid'];
$str = "DELETE FROM tbl_customer WHERE id = $cid";
$result = mysql_query($str);
if($result){
	echo 'Xóa thành công!';
	header('location: index.php?mod=customer');
}
else
	echo 'Xóa thất bại!';
?>
</td>