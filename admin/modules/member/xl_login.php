<td><?php$u = $_POST['user'];$p = md5($_POST['pass']);//echo "$u - $p";$str = "SELECT * FROM tbl_user WHERE username='$u' AND password='$p'  ";$result = mysql_query($str);$rows = mysql_fetch_array($result);if($rows){	$_SESSION['ok'] = 1;		$_SESSION['user'] = $u;	$_SESSION['uid'] = $rows['id'];	$_SESSION['idgu'] = $rows['id_group_user'];	header('location: index.php');}else{	echo 'Ban sai username hoac password!';	echo "<br />Dang nhap lai <a href='index.php?mod=member&act=login'>tai day</a>";}	?></td>