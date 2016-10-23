<td class="tdmain" align="center" valign="top">
<?php
$cid = $_GET['cid'];
$str = "SELECT * FROM tbl_customer WHERE id = $cid";
$result = mysql_query($str);
$rows = mysql_fetch_array($result);
?>
<b>THÔNG TIN KHÁCH HÀNG:</b><br /><br />
<table border="0">
<tr>
	<td style="font-weight: bold;">Email:</td>
	<td><?php echo $rows['email'];?></td>
<tr>
<tr>
	<td style="font-weight: bold;">Tel:</td>
	<td><?php echo $rows['tel'];?></td>
<tr>
<tr>
	<td style="font-weight: bold;">Add:</td>
	<td><?php echo $rows['add'];?></td>
<tr>
<tr>
	<td style="font-weight: bold;">Active:</td>
	<td><input type="checkbox" name="active" <?php if($rows['active']==1)echo 'checked';?> /></td>
<tr>
<tr>
	<td style="font-weight: bold;">Register Date:</td>
	<td><?php echo $rows['register_date'];?></td>
<tr>
<tr>
	<td colspan="2" align="center">
		<a style="color: red; font-weight: bold;" href="index.php?mod=customer&act=editprofile&cid=<?php echo $cid;?>">
			[Edit]
		</a>
		<a onclick="return confirm('Chắc chắn xóa không?')" style="color: red; font-weight: bold;" href="index.php?mod=customer&act=delete&cid=<?php echo $cid;?>">
			[Delete]
		</a>
	</td>
	
</tr>
</table>
</td>