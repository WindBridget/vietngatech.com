<?php
if($_SESSION['ok']!=1){
	header('location: index.php?mod=member&act=login');
	break;
}	

if(!chk_permision())
	header('location: index.php?mod=member&act=error');	
	
$a = $_GET['act'];
switch ($a){
	case "add":
		include('modules/contact/add.php');
		break;
	case "xl_add":
		include('modules/contact/xl_add.php');
		break;		
}
?>