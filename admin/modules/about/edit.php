<?php
$str = "SELECT * FROM tbl_about WHERE id_lang=$id_lang";
$result = mysql_query($str);
$rows = mysql_fetch_array($result);
?>	
	<td class="tdmain">
	<form action="index.php?mod=about&act=xl_edit" method="POST">
		<textarea class="ckeditor" name="content"><?php echo $rows['content'];?></textarea><br />
		<input type="submit" value="Chap Nhan" />		
	</form>
	</td>