<td>
<?php
$id = $_POST['id'];
$name = $_POST['name'];
$serial = $_POST['serial'];
$level = $_POST['level'];
$description = mysql_real_escape_string($_POST['description']);
//echo "$name - $price - $id_group - $photo - $sumary - $detail";
$str = "UPDATE tbl_group_product SET name = '$name', serial = '$serial', level='$level',
		description = '$description' WHERE id = $id";
$result = mysql_query($str);
if($result){
	echo "Sua nhom san pham thanh cong!";
	header('location: index.php?mod=product&act=list_category');
}
else
	echo "Sua nhom san pham that bai!";
?>
</td>