<td>
<?php
$name = $_POST['name'];
$serial = $_POST['serial'];
$level = $_POST['level'];
$description = mysql_real_escape_string($_POST['description']);
//echo "$name - $level - $description";
$str = "INSERT INTO tbl_group_product VALUES
		('','$name','$id_lang','$level','$serial','$description')";
$result = mysql_query($str);
if($result){
	echo "Them nhom san pham thanh cong!";
	header('location: index.php?mod=product&act=list_category');	
}
else
	echo "Them nhom san pham that bai!";
?>
</td>