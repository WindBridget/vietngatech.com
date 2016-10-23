	<td valign="top" class="tdmain">	
	<b style="color: red; font-size: 20px;">
		DANH SÁCH TIN TỨC:
	</b>	
	<br />
<?php
$sonews = 10;
$base_url= 'index.php?mod=news&';

if($_GET['start'])
	$s = $_GET['start'];
else
	$s = 0; 
$query = mysql_query("SELECT * FROM tbl_news WHERE id_lang=$id_lang ORDER BY id DESC"); 
$tongsodong = mysql_num_rows($query);
if($tongsodong==0){
?>
Tin Tức chưa được cập nhật!<br />
<?php
}
if($tongsodong >= $sonews)
	$str = mysql_query("SELECT * FROM tbl_news WHERE id_lang=$id_lang ORDER BY id DESC limit $s,$sonews");
else
	$str = mysql_query("SELECT * FROM tbl_news WHERE id_lang=$id_lang ORDER BY id DESC");
?>
<a href="index.php?mod=news&act=list_category">+ Quản Lý Nhóm Tin Tức</a><br />
<a href="index.php?mod=news&act=insert">+ Thêm Tin Tức</a><br />
<table width="100%" border="0">
	<?php
	while($rows = mysql_fetch_array($str)){		
	?>
		<tr  onmouseover="this.bgColor='#D1D1D1'" onmouseout="this.bgColor='#fff'">
		<td align="center">
		<img src="<?php echo $rows['photo']; ?>" width="50" height="50"/>
		</td>
		<td width="500">
		<font style="color: blue; font-weight: bold;">
		<a href="index.php?mod=news&act=detail&id=<?php echo $rows['id']; ?>">
			<?php echo $rows['title']; ?>
		</a>	
		</font>
		</td>
		<td>
			<a href="index.php?mod=news&act=edit&id=<?php echo $rows['id']; ?>">
				[Sửa]
			</a>
		</td>

		<td>
			<a onclick="return confirm('Chac chan xoa khong?')" href="index.php?mod=news&act=delete&id=<?php echo $rows['id']; ?>">
				[Xóa]
			</a>
		</td>
	</tr>
<?php
}
?>
<tr>
	<td colspan="5" align="center">
		<?php
		echo pagenav($base_url, $s, $tongsodong, $sonews);
		?>
	</td>
</tr>
</table>
	
	</td>