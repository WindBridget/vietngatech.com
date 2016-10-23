<div id="content">
	<div id="home">
		<div id="about_tt">
			<p>Tin Tức</p>
		</div>
		<?php
			$base_url= 'index.php?mod=news&';

			if($_GET['start'])
				$s = $_GET['start'];
			else
				$s = 0; 
				$sonews = 4;
			$query = mysql_query("SELECT * FROM tbl_news ORDER BY id DESC"); 
			$tongsodong = mysql_num_rows($query);
			if($tongsodong==0){
		?>
			Tin tức chưa được cập nhật!
		<?php
			}
			if($tongsodong >= $sonews)
				$str = mysql_query("SELECT * FROM tbl_news ORDER BY id DESC limit $s,$sonews");
			else
				$str = mysql_query("SELECT * FROM tbl_news ORDER BY id DESC");
		?>
		<table width="100%" border="0" >
			
			<tr>
				<?php
				$d = 0;
				while($rows = mysql_fetch_array($str)){
					$d = $d+1;
				?>
					<td   align="center" class="news">
					
					<table  >
						<tr>
							<td  valign="top">			
								<img src="<?php echo $rows['photo']; ?>" class="img_news">
							</td>
							<td valign="top" style="padding-left:5px;">
								<a href="?mod=news&act=detail&id=<?php echo $rows['id']; ?>" style="color: #000;">
								<font style="color: #000; font-weight: bold;">
									<?php 
										$title = truncateString($rows['title'], 50, true);
										echo $title; 
									?>					
								</font>
								</a>
							<br />
								<?php
									$sumary = truncateString($rows['sumary'], 100, true);
									echo $sumary; 
								?>
							</td>
						</tr>
					</table>
					
					</td>
				<?php	
					if($d%2==0)
					echo "</tr>";
				}
				?>
			</tr>
		
		</table>
	