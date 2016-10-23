<td>
<?php
$title = $_POST['title'];
$id_group = $_POST['id_group'];
$photo = $_POST['photo'];
$sumary = mysql_real_escape_string($_POST['sumary']);
$detail = mysql_real_escape_string($_POST['detail']);
//echo "$name - $price - $id_group - $photo - $sumary - $detail";
$str = "INSERT INTO tbl_news VALUES
		('','$title','$id_lang','$id_group','$photo','$sumary','$detail',NOW())";
$result = mysql_query($str);
if($result)
	echo "Them tin tuc thanh cong!";
else
	echo "Them tin tuc that bai!";
?>
</td>