<?php
if($_SESSION['ok']!=1)
	header('location: index.php?mod=member&act=login');
?>
<td align="center" height="300" class="tdmain">
<b>
Chào mừng các bạn đến với trang quản trị!
<br />
Hãy click vào từng modules để cập nhật thông tin!
</b>
</td>