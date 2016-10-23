<div id="content">
	<div id="home">
<?php
$id_group = $_GET['id_group'];
$base_url= "index.php?mod=search&id_group=$id_group&";

if($_GET['start'])
	$s = $_GET['start'];
else
	$s = 0; 
$query = mysql_query("SELECT * FROM tbl_product WHERE id_group = $id_group OR id_group in (SELECT id FROM tbl_group_product WHERE level = $id_group)"); 
$tongsodong = mysql_num_rows($query);
if($tongsodong==0){
?>
Sản phẩm chưa được cập nhật!
<?php
}
if($tongsodong >= $soproduct)
	$str = mysql_query("SELECT * FROM tbl_product WHERE id_group = $id_group OR id_group in (SELECT id FROM tbl_group_product WHERE level = $id_group) limit $s,$soproduct");
else
	$str = mysql_query("SELECT * FROM tbl_product WHERE id_group = $id_group OR id_group in (SELECT id FROM tbl_group_product WHERE level = $id_group)");
?>
<table width="100%" border="0px #C7C7C7 solid" >
			<tr>
				<?php
				$d = 0;
				while($rows = mysql_fetch_array($str)){
					$d = $d+1;
				?>
				<td width="25%" height="180" align="center" style="background:url('images/hb.jpg') repeat 0 0; padding-top:3px;">

					<a href="?mod=product&act=detail&id=<?php echo $rows['id']; ?>">
						<img src="<?php echo $rows['photo']; ?>" width="100" height="100" border="0" style="background-color:#dee7ae; border: 1px #C7C7C7 solid; padding: 3px;" />
					<br />
						<b>
						<?php
							$name = truncateString($rows['name'], 20, true);
							echo $name; 		
						?>
						</b>
					<br />
					</a>
				</td>
				<?php	
					if($d%4==0)
					echo "</tr>";
				}
				?>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<?php
				echo pagenav($base_url, $s, $tongsodong, $soproduct);
				?>
				</td>
			</tr>
		</table>
</div>