<td>
<?php
$name = mysql_real_escape_string($_POST['name']);
$photo = mysql_real_escape_string($_POST['photo']);
$sumary = mysql_real_escape_string($_POST['sumary']);
$link = mysql_real_escape_string($_POST['link']);
//echo "$name - $price - $id_group - $photo - $sumary - $detail";
$str = "INSERT INTO tbl_slides VALUES
		('','$name','$photo','$sumary','$link',NOW())";
$result = mysql_query($str);
if($result)
	echo "Them anh thanh cong!";
else
	echo "Them anh that bai!";
?>
</td>