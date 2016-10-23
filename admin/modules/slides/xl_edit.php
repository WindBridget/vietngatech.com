<td>
<?php
$id = $_POST['id'];
$title = mysql_real_escape_string($_POST['title']);
$photo = $_POST['photo'];
$sumary = mysql_real_escape_string($_POST['sumary']);
$link = mysql_real_escape_string($_POST['link']);
//echo "$name - $price - $id_group - $photo - $sumary - $detail";
$str = "UPDATE tbl_slides SET title = '$title', photo = '$photo', sumary='$sumary',
		link = '$link' WHERE id = $id";
$result = mysql_query($str);
if($result)
	echo "Sua anh thanh cong!";
else
	echo "Sua anh that bai!";
?>
</td>