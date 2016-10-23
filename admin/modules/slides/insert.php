<td>
<form action="index.php?mod=slides&act=xl_insert" method="POST">
Title: <input type="text" name="name" value="" /><br />
Photo: <input type="text" name="photo" value="" /><br />
Link: <input type="text" name="link" value="" /><br />
Sumary: <input type="text" name="sumary" value="<?php echo $rows2['sumary'];?>" /><br />
<input type="submit" value="Chap Nhan" />
<input type="reset" value="Huy" />
</form>
</td>