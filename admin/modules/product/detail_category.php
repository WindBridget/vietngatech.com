	<td>
	<?php
$id = $_GET['id'];
$str = "SELECT * FROM tbl_group_product WHERE id = $id";	
$result = mysql_query($str);
$d = 0;
?>
<a href="index.php?mod=product&act=list_category">+ Quản Lý Nhóm Sản Phẩm</a><br />
<a href="index.php?mod=product&act=insert">+ Thêm Sản Phẩm</a><br />
<table border="0">
<tr>
<?php
while($rows = mysql_fetch_array($result)){
$level = $rows['level'];
$str2 = "SELECT * FROM tbl_group_product WHERE id = $level";
$result2 = mysql_query($str2);	
$rows2 = mysql_fetch_array($result2);
$d = $d + 1;
?>
<td>
Name: 
<font style="color: blue; font-weight: bold;">
	<?php echo $rows['name']; ?>
</font>
<br />
Parent: 
<?php 
if(!$rows2['name'])
	echo "Đây là 1 nhóm chinh!";
else
	echo $rows2['name']; 
?>
<br />
Description: <?php echo $rows['description']; ?>
</td>
<?php
if($d%4==0)
	echo "</tr>";
}
?>
</tr>
</table>
	
	</td>