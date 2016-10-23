<div id="content">
	<div id="home">
	<?php
	$id = $_GET['id'];
	$str = "SELECT * FROM tbl_news WHERE id = $id";	
	$result = mysql_query($str);
	$d = 0;
	?>
	<table width="100%" style="border: 0px #C7C7C7 solid;" >
		<tr>
		<?php
		while($rows = mysql_fetch_array($result)){
		$d = $d + 1;
		?>
			<td>
				<table border="0"  >
					<tr>
						<td width="300" style="padding:10px; border:1px #C7C7C7 solid; ">
							<img src="<?php echo $rows['photo']; ?>" width="300" height="300"/>
						</td>
						<td valign="top" width="410" style="padding-left: 10px; border:1px #C7C7C7 solid; ">
							<font style="color: blue; font-weight: bold;">
								<?php echo $rows['title']; ?>		
							</font>
							<br />
							<br />
							<?php echo $rows['sumary']; ?>
						</td>	
					</tr>
					<tr>
						<td colspan="2" style="padding:10px;">

								<?php echo $rows['detail']; ?>

						</td>
					</tr>
				</table>
			<br />

			</td>
		<?php
		}
		?>
		</tr>
	</table>
	
	</div>