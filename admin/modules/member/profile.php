<td class="tdmain" align="center" valign="top">
<?php
if($_SESSION['ok']!=1){
	header('location: index.php?mod=member&act=error');
	exit;	
}	
$uid = $_GET['uid'];
$str = "SELECT * FROM tbl_user WHERE id = $uid";
$result = mysql_query($str);
$rows = mysql_fetch_array($result);
?>
<b>THÔNG TIN :</b><br /><br />
<table border="0">
<tr>
	<td style="font-weight: bold;">User:</td>
	<td><?php echo $rows['username'];?></td>
<tr>
<tr>
	<td style="font-weight: bold;">Nhóm</td>
	<td><?php echo $rows['id_group_user'];?></td>
<tr>

<tr>
	<td colspan="2" align="center">
		<a style="font-weight: bold;" href="index.php?mod=member&act=editprofile&uid=<?php echo $uid;?>">
			[Edit]
		</a>
		
	</td>
	
</tr>
</table>
</td>