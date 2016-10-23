<td valign="top" align="center" class="tdmain">
<?php
$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$content = $_POST['content'];

$str = "INSERT INTO tbl_contact VALUES('','$fullname','$mobile','$email','$address','$content',NOW())";
$result = mysql_query($str);
if($result){
	echo "Them lien he thanh cong!";


}
else{

	echo "Them lien he that bai!";


}
?>
</td>