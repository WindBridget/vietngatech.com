<td class="tdmain" align="center" valign="top">
<?php
$cid = $_GET['cid'];
$str = "SELECT * FROM tbl_customer WHERE id = $cid";
$result = mysql_query($str);
$rows = mysql_fetch_array($result);
?>
<b>THÔNG TIN KHÁCH HÀNG:</b><br /><br />
<form action="index.php?mod=customer&act=xl_editprofile" method="POST" onsubmit="return validate_cf_pass(this);">
<table border="0">
<?php
$cid = $_GET['cid'];
?>
<input type="hidden" name="cid" value="<?php echo $cid;?>" />
<tr>
	<td style="font-weight: bold;">Email:</td>
	<td><input type="text" name="email" value="<?php echo $rows['email'];?>" /></td>
<tr>
<tr>
	<td style="font-weight: bold;">Password:</td>
	<td> <input type="password" name="pass" value="" /></td>
</tr>
<tr>
	<td style="font-weight: bold;">Confirm Password:</td>
	<td> <input type="password" name="cf-pass" value="" /></td>
</tr>
<tr>
	<td style="font-weight: bold;">Tel:</td>
	<td><input type="text" name="tel" value="<?php echo $rows['tel'];?>" /></td>
<tr>
<tr>
	<td style="font-weight: bold;">Add:</td>
	<td><input type="text" name="add" value="<?php echo $rows['add'];?>" /></td>
<tr>
<tr>
	<td style="font-weight: bold;">Register Date:</td>
	<td><?php echo $rows['register_date'];?></td>
<tr>
<tr>
	<td style="font-weight: bold;">Active:</td>
	<td><input type="checkbox" name="active" <?php if($rows['active']==1)echo 'checked';?> /></td>
<tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" value="Chấp Nhận" />
	<input type="reset" value="Hủy" />
	</td>
</tr>
</table>
</form>
</td>