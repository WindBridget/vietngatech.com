<td>
<?php
$name = $_POST['name'];
$serial = $_POST['serial'];
$level = $_POST['level'];
$description = mysql_real_escape_string($_POST['description']);
//echo "$name - $level - $description";
$str = "INSERT INTO tbl_group_news VALUES
		('','$name','$id_lang','$level','$serial','$description')";
$result = mysql_query($str);
if($result){
	echo "Them nhom tin tuc thanh cong!";
	header('location: index.php?mod=news&act=list_category');	
}
else
	echo "Them nhom tin tuc that bai!";
?>
</td>