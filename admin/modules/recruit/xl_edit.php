<td class="tdmain">
<?php
$content = mysql_real_escape_string($_POST['content']);
$str = "UPDATE tbl_recruit SET content = '$content' WHERE id_lang=$id_lang";
$result = mysql_query($str);
if($result)
	echo "Sua tuyen dung thanh cong!";
else
	echo "Sua tuyen dung that bai!";
?>
</td>