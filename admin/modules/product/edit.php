<td>
<?php
$id = $_GET['id'];
$str2 = "SELECT * FROM tbl_product WHERE id = $id AND id_lang = $id_lang";
$result2 = mysql_query($str2);
$rows2 = mysql_fetch_array($result2);


$str = "SELECT * FROM tbl_group_product WHERE level=0 AND id_lang = $id_lang";
$result = mysql_query($str);
?>
<form action="index.php?mod=product&act=xl_edit" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
Name: <input type="text" name="name" value="<?php echo $rows2['name'];?>" /><br />
Price: <input type="text" name="price" value="<?php echo $rows2['price'];?>" /><br />
Group:
<select name="id_group">
<?php
while($rows = mysql_fetch_array($result)){
$id_group = $rows['id'];
$str3 = "SELECT * FROM tbl_group_product WHERE level=$id_group AND id_lang = $id_lang";
$result3 = mysql_query($str3);
?>
	<option style="font-weight: bold; color: blue;" value="<?php echo $rows['id']; ?>" <?php if($rows['id']==$rows2['id_group']) echo "selected = 'selected'";?>>
		<?php echo $rows['name']; ?>
	</option>	
<?php
while($rows3 = mysql_fetch_array($result3)){
?>
	<option value="<?php echo $rows3['id']; ?>" <?php if($rows3['id']==$rows2['id_group']) echo "selected = 'selected'";?>>
		+ <?php echo $rows['serial'].'>'.$rows3['name'];?>
	</option>	
<?php	
	}
}
?>	
</select>
<br />
Photo: <input type="text" name="photo" value="<?php echo $rows2['photo'];?>" /><br />

Sumary: <br />
<textarea name="sumary"><?php echo $rows2['sumary'];?></textarea><br />
Detail: <br />
<textarea class="ckeditor" name="detail"><?php echo $rows2['detail'];?></textarea><br />

<input type="submit" value="Chap Nhan" />
<input type="reset" value="Huy" />
</form>
</td>