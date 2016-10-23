<div id="content">
	<div id="home">
		
		<?php
		$id = $_GET['id'];
		$str = "SELECT * FROM tbl_product WHERE id = $id";	
		$result = mysql_query($str);
		$d = 0;
		?>
		<table width="100%" style="border: 0px #C7C7C7 solid;" >
			<tr>
			<?php
			while($rows = mysql_fetch_array($result)){
			$d = $d + 1;
			?>
				<td align="center">
				<img src="<?php echo $rows['photo']; ?>" width="300" height="300"/>
				<br />
				
				<br />
				<font style="color: blue; font-weight: bold;">
					<?php echo $rows['name']; ?>
				</font>
				
				<br />
				<?php echo $rows['sumary']; ?>
				<br />
				<style type="text/css">
				
				</style>
				
					<?php echo $rows['detail']; ?>
		
				</td>
			<?php
			if($d%4==0)
				echo "</tr>";
			}
			?>
			</tr>
		</table>
	
	</div>