<td class="tdmain">
<?php
$content = mysql_real_escape_string($_POST['content']);
$str = "UPDATE tbl_about SET content = '$content' WHERE id_lang=$id_lang";
$result = mysql_query($str);
if($result)
	echo "Sua gioi thieu thanh cong!";
else
	echo "Sua gioi thieu that bai!";
?>
</td>