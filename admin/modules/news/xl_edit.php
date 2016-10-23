<td>
<?php
$id = $_POST['id'];
$title = mysql_real_escape_string($_POST['title']);
$id_group = $_POST['id_group'];
$photo = $_POST['photo'];
$sumary = mysql_real_escape_string($_POST['sumary']);
$detail = mysql_real_escape_string($_POST['detail']);
//echo "$name - $price - $id_group - $photo - $sumary - $detail";
$str = "UPDATE tbl_news SET title = '$title', id_group = '$id_group', photo = '$photo', sumary='$sumary',
		detail = '$detail' WHERE id = $id";
$result = mysql_query($str);
if($result)
	echo "Sua tin tuc thanh cong!";
else
	echo "Sua tin tuc that bai!";
?>
</td>