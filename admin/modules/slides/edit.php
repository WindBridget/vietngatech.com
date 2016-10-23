<td>
<?php
$id = $_GET['id'];
$str2 = "SELECT * FROM tbl_slides WHERE id = $id";
$result2 = mysql_query($str2);
$rows2 = mysql_fetch_array($result2);
?>
<form action="index.php?mod=slides&act=xl_edit" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
Title: <input type="text" name="title" value="<?php echo $rows2['title'];?>" /><br />
Photo: <input type="text" name="photo" value="<?php echo $rows2['photo'];?>" /><br />
Link: <input type="text" name="link" value="<?php echo $rows2['link'];?>" /><br />
Sumary: <input type="text" name="sumary" value="<?php echo $rows2['sumary'];?>" /><br />

<input type="submit" value="Chap Nhan" />
<input type="reset" value="Huy" />
</form>
</td>