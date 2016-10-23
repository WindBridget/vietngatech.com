<td>
<?php
$str = "SELECT * FROM tbl_group_product WHERE level = 0 AND id_lang = $id_lang";
$result = mysql_query($str);
?>
<form action="index.php?mod=product&act=xl_insert_category" method="POST">
Name: <input type="text" name="name" value="" /><br />
Serial: <input type="text" name="serial" value="" /><br />
Parent:
<select name="level">
<option value="0">
		---- Nhóm Chính ----
</option>
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
Description: <br />
<textarea name="description"></textarea><br />

<input type="submit" value="Chap Nhan" />
<input type="reset" value="Huy" onclick="history.back(-1)"/>
</form>
</td>