<div id="content">
	<div id="home">
		<div id="about_tt">
			<p>Thông Tin Liên Hệ</p>
		</div>
		
			<table border="1" align="center" class="contact">
			<tr height="40">
				<th>Contact</th>			
				<th>Content</th>
				<th>Post Date</th>

			</tr>
			<?php
			$str = "SELECT * FROM tbl_contact";
			$result = mysql_query($str);
			$t = mysql_num_rows($result);
			if($t==0){
			?>
			<tr>
				<td colspan="3">Hiện Không Có Thông Tin Nào</td>
			</tr>
			<?php
			}
			while($rows = mysql_fetch_array($result)){
				$id = $rows['id'];
				$fullname = $rows['fullname'];
				$tel = $rows['mobile'];
				$email = $rows['email'];
				$add = $rows['address'];		
				$content = $rows['content'];			
				$post_date = $rows['post_date'];			
			?>

			<tr>
				<td width="50%" style="padding-left:10px;">
					<br />
					<b><?php echo $fullname; ?></b>
					<br />
					<br />
					<b>Tel: </b> <?php echo $tel; ?>
					<br />
					<br />
					<b>Email: </b><?php echo $email; ?>
					<br />
					<br />
					<b>Add: </b><?php echo $add; ?>
					<br /><br />
				</td>
				<td width="30%" style="padding-left:10px;">
					<?php echo $rows['content']; ?>
				</td>
				<td width="20%" style="padding-left:10px;">
					<?php echo $rows['post_date']; ?>
				</td>
					
			</tr>
			<?php
			}
			?>

			</table>
		
	</div>