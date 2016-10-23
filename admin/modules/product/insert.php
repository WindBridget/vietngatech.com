<td>
<?php
$str = "SELECT * FROM tbl_group_product WHERE level=0 AND id_lang = $id_lang";
$result = mysql_query($str);
?>
<form action="index.php?mod=product&act=xl_insert" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
Name: <input type="text" name="name" value="" /><br />
Price: <input type="text" name="price" value="" /><br />
Group:
<select name="id_group">
<?php
while($rows = mysql_fetch_array($result)){
$id_group = $rows['id'];
$str3 = "SELECT * FROM tbl_group_product WHERE level=$id_group AND id_lang = $id_lang";
$result3 = mysql_query($str3);
?>
	<option style="font-weight: bold; color: blue;" value="<?php echo $rows['id']; ?>">
		<?php echo $rows['name']; ?>
	</option>	
<?php
while($rows3 = mysql_fetch_array($result3)){
?>
	<option value="<?php echo $rows3['id']; ?>">
		+ <?php echo $rows['serial'].'>'.$rows3['name'];?>
	</option>	
<?php	
	}
}
?>	
</select>
<br />
Photo: <input type="text" name="photo" value="" /><br />
Sumary: <br />
<textarea name="sumary"></textarea><br />
Detail: <br />
<textarea class="ckeditor" name="detail"></textarea><br />

<input type="submit" value="Chấp nhận" />
<input type="reset" value="Hủy" />
</form>
</td>