<td>
<?php
$str = "SELECT * FROM tbl_group_news WHERE id_lang=$id_lang";
$result = mysql_query($str);
?>
<form action="index.php?mod=news&act=xl_insert" method="POST">
Title: <input type="text" name="title" value="" /><br />
Group:
<select name="id_group">
<?php
while($rows = mysql_fetch_array($result)){
?>
	<option value="<?php echo $rows['id']; ?>">
		<?php echo $rows['name']; ?>
	</option>
<?php	
}
?>	
</select>
<br />
Photo: <input type="text" name="photo" value="" /><br />

Sumary: <br />
<textarea name="sumary"></textarea><br />
Detail: <br />
<textarea class="ckeditor" name="detail"></textarea><br />

<input type="submit" value="Chap Nhan" />
<input type="reset" value="Huy" />
</form>
</td>