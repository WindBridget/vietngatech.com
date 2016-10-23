<div id="content">
	<div id="home">
		<div id="about_tt">
			<p>Kết Quả Tìm Kiếm</p>
		</div>
		<?php
			$name = $_POST['name'];
			$base_url= "index.php?mod=search&name=$name&";

			if($_GET['start'])
				$s = $_GET['start'];
			else
				$s = 0; 
			$query = mysql_query("SELECT * FROM tbl_product WHERE name LIKE '%$name%' ORDER BY id DESC"); 
			$tongsodong = mysql_num_rows($query);
			if($tongsodong==0){
		?>
			<br />
			Không tìm thấy sản phẩm nào!
		<?php
			}
			if($tongsodong >= $soproduct)
				$str = mysql_query("SELECT * FROM tbl_product WHERE name LIKE '%$name%' ORDER BY id DESC limit $s,$soproduct");
			else
				$str = mysql_query("SELECT * FROM tbl_product WHERE name LIKE '%$name%' ORDER BY id DESC");
			?>
		<table width="100%" border="0px" >
			<tr>
				<?php
				$d = 0;
				while($rows = mysql_fetch_array($str)){
					$d = $d+1;
				?>
			<td  >
					<a href="?mod=product&act=detail&id=<?php echo $rows['id']; ?>">
					<table class="product" >
						<tr>
							
								<td valign="top" align="center" >	
									<img src="<?php echo $rows['photo']; ?>" class="img_news"/>
								</td>	
							
						</tr>	
						<tr>
							<td align="center">
								<b>
								<?php
									$name = truncateString($rows['name'], 20, true);
									echo $name; 		
								?>
								</b>
							</td>
							
							
						</tr>
					</table>
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