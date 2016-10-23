<td>
<?php
$id = $_POST['id'];
$name = $_POST['name'];
$serial = $_POST['serial'];
$level = $_POST['level'];
$description = mysql_real_escape_string($_POST['description']);
//echo "$name - $price - $id_group - $photo - $sumary - $detail";
$str = "UPDATE tbl_group_news SET name = '$name', serial = '$serial', level='$level',
		description = '$description' WHERE id = $id";
$result = mysql_query($str);
if($result){
	echo "Sua nhom tin tuc thanh cong!";
	header('location: index.php?mod=news&act=list_category');
}
else
	echo "Sua nhom tin tuc that bai!";
?>
</td>