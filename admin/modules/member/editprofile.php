<td class="tdmain" align="center" valign="top">
<?php
$uid = $_GET['uid'];
if($_SESSION['ok']!=1 || $uid!=$_SESSION['uid']){
	header('location: index.php?mod=member&act=error');
	exit;	
}	
$str = "SELECT * FROM tbl_user WHERE id = $uid";
$result = mysql_query($str);
$rows = mysql_fetch_array($result);
?>
<b>THÔNG TIN :</b><br /><br />
<form action="index.php?mod=member&act=xl_editprofile" method="POST">
<table border="0">
<?php
$uid = $_GET['uid'];
?>
<input type="hidden" name="uid" value="<?php echo $uid;?>" />
<tr>
	<td style="font-weight: bold;">User Name:</td>
	<td><?php echo $rows['username'];?></td>
<tr>
<tr>
	<td style="font-weight: bold;">Nhóm:</td>
	<td><?php echo $rows['id_group_user'];?></td>
<tr>
<tr>
	<td style="font-weight: bold;">Đổi Pass:</td>
	<td><input type="text" name="pass" value="" /></td>
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