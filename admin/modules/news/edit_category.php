<td>
<?php
$id = $_GET['id'];
$str2 = "SELECT * FROM tbl_group_news WHERE id = $id AND id_lang=$id_lang";
$result2 = mysql_query($str2);
$rows2 = mysql_fetch_array($result2);


$str = "SELECT * FROM tbl_group_news WHERE id != $id AND level = 0 AND id_lang=$id_lang";
$result = mysql_query($str);
?>
<form action="index.php?mod=news&act=xl_edit_category" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
Name: <input type="text" name="name" value="<?php echo $rows2['name'];?>" /><br />
Serial: <input type="text" name="serial" value="<?php echo $rows2['serial'];?>" /><br />
Parent:
<select name="level">
<option value="0">
		---- Nhóm Chính ----
</option>
<?php
while($rows = mysql_fetch_array($result)){
?>
	<option value="<?php echo $rows['id']; ?>" <?php if($rows['id']==$rows2['level']) echo "selected = 'selected'";?>>
		<?php echo $rows['name']; ?>
	</option>
<?php	
}
?>	
</select>
<br />
Description: <br />
<textarea name="description"><?php echo $rows2['description'];?></textarea><br />
<input type="submit" value="Chap Nhan" />
<input type="reset" value="Huy" onclick="history.back(-1)"/>
</form>
</td>