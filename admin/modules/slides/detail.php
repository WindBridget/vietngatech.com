	<td>
	<?php
$id = $_GET['id'];
$str = "SELECT * FROM tbl_slides WHERE id = $id";	
$result = mysql_query($str);
$d = 0;
?>
<table border="0">
<tr>
<?php
while($rows = mysql_fetch_array($result)){
$d = $d + 1;
?>
<td>
<img src="<?php echo $rows['photo']; ?>" width="300" height="300"/>
<br />
<font style="color: blue; font-weight: bold;">
	<?php echo $rows['title']; ?>
</font>
<br />
Link: <?php echo $rows['link']; ?>
<br />
Mo tả: <?php echo $rows['sumary']; ?>
</td>
<?php
if($d%4==0)
	echo "</tr>";
}
?>
</tr>
</table>
	
	</td>