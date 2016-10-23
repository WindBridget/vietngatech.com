	<td valign="top">	
	<b style="color: red; font-size: 20px;">
		DANH SÁCH NHÓM TIN TỨC:
	</b>	
	<br />
<?php
$base_url= 'index.php?mod=news&act=list_category&';

if($_GET['start'])
	$s = $_GET['start'];
else
	$s = 0; 
$query = mysql_query("SELECT * FROM tbl_group_news WHERE id_lang=$id_lang ORDER BY id DESC"); 
$tongsodong = mysql_num_rows($query);
if($tongsodong==0){
?>
Tin Tức chưa được cập nhật!<br />
<?php
}
if($tongsodong >= $sogroupnews)
	$str = mysql_query("SELECT * FROM tbl_group_news WHERE level = 0 AND id_lang=$id_lang ORDER BY id DESC limit $s,$sogroupnews");
else
	$str = mysql_query("SELECT * FROM tbl_group_news WHERE level = 0 AND id_lang=$id_lang ORDER BY id DESC");
?>
<a href="index.php?mod=news&act=insert_category">+ Thêm Nhóm Tin Tức</a><br />
<a href="index.php?mod=news&act=insert">+ Thêm Tin Tức</a><br />
<table width="100%" border="0" style="color: blue; font-weight: bold;">
	<?php
	while($rows = mysql_fetch_array($str)){		
	$id_group = $rows['id'];
	//echo $id_group;
	$str2 = "SELECT * FROM tbl_group_news WHERE level = $id_group AND id_lang=$id_lang";
	//echo $str2;	
	$result2 = mysql_query($str2);
	?>
		<tr onmouseover="this.bgColor='#D1D1D1'" onmouseout="this.bgColor='#fff'">	
			<td>
				<a href="index.php?mod=news&act=detail_category&id=<?php echo $rows['id']; ?>">
					<?php					
						echo $rows['name']; 
					?>
				</a>
			</td>
			<td>			
					<?php echo $rows['serial']; ?>			
			</td>			
			<td>
				<a href="index.php?mod=news&act=edit_category&id=<?php echo $rows['id']; ?>">
					[Sửa]
				</a>					
			</td>
			<td>
				<a onclick="return confirm('Chac chan xoa khong?')" href="index.php?mod=news&act=delete_category&id=<?php echo $rows['id']; ?>">
					[Xóa]
				</a>					
			</td>
		</tr>

			<?php
			while($rows2 = mysql_fetch_array($result2)){
			?>
		<tr onmouseover="this.bgColor='yellow'" onmouseout="this.bgColor='#fff'">
			<td>
			<a href="index.php?mod=news&act=detail_category&id=<?php echo $rows2['id']; ?>">
					+ <?php echo $rows2['name']; ?>
			</a>
			</td>
			<td>			
					<?php echo $rows2['serial']; ?>			
			</td>			
			<td>
				<a href="index.php?mod=news&act=edit_category&id=<?php echo $rows2['id']; ?>">
					[Sửa]
				</a>					
			</td>
			<td>
				<a onclick="return confirm('Chac chan xoa khong?')" href="index.php?mod=news&act=delete_category&id=<?php echo $rows2['id']; ?>">
					[Xóa]
				</a>					
			</td>							
		</tr>
			<?php
			}
			?>										
<?php
}
?>
<tr>
	<td colspan="5" align="center">
		<?php
		echo pagenav($base_url, $s, $tongsodong, $sogroupnews);
		?>
	</td>
</tr>
</table>
	
	</td>