<?php
$str = "SELECT * FROM tbl_recruit WHERE id=1";
$result = mysql_query($str);
$rows = mysql_fetch_array($result);
?>	
	<div id="content">
		<div id="home">
			<div id="about_tt">
				<p>Tuyển Dụng</p>
			</div>
			<div id="about">
			<?php echo $rows['content'];?>
			</div>
		</div>