<html>
<head>
	<title>VIETNGATECH</title>
	<link rel="stylesheet" href="../style.css" type="text/css" />		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>	
	<script src="../js/function.js" type="text/javascript"></script>
</head>
<body>
<center>
	<table border="0" style="background: #fff;">
		<tr>
			<td colspan="3">
				<table border="1" width="960">
					<tr>
						<td align="center" height="100">
							<b style="color: blue; font-size: 30px;">[ QUẢN TRỊ WEBSITE ]</b>
							<br />
							<?php							
							if($_SESSION['ok']==1){
							?>
							Xin chào: <?php echo $_SESSION['user'];?><br />
							ID của bạn là: <?php echo $_SESSION['uid'];?><br />
							<?php
							$idgu = $_SESSION['idgu'];
							$str = "SELECT * FROM tbl_group_user WHERE id = $idgu";
							$result = mysql_query($str);
							$rows = mysql_fetch_array($result);
							?>
							Nhóm của bạn là: <?php echo $rows['name'];?><br />
							<?php
							}
							?>
							
						</td>
					</tr>
						
					<tr>
						<td>
							<table border="1" style="font-weight: bold;">
							<tr>						
								<td><a href="../index.php" target="_blank">Trang Chủ</a></td> 
								<td><a href="index.php?mod=about&act=edit">Giới Thiệu</a></td>
								<td><a href="index.php?mod=news">Tin Tức</a></td>
								<td><a href="index.php?mod=product">Sản Phẩm</a></td>
								<td><a href="index.php?mod=slides">Ảnh Động</a></td>
								<td><a href="index.php?mod=recruit&act=edit">Tuyển Dụng</a></td>
								
								<td><a href="index.php?mod=contact&act=add">Liên Hệ</a></td>
								<?php 
									if($_SESSION['ok']){
								?>
								<td>
									<a href="index.php?mod=member&act=logout">[Thoát</a>
									<a href="index.php?mod=member&act=profile&uid=<?php echo $_SESSION['uid'];?>">/Cá Nhân]</a>
								</td>
								<?php 
									} 
									else { 
								?>
								<td><a href="index.php?mod=member&act=login">Đăng Nhập</a></td>
								<?php
									}
								?>
								
							</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>