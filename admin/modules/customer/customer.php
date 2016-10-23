<?php
if($_SESSION['ok']!=1){
	header('location: index.php?mod=member&act=login');
	break;
}	

if(!chk_permision())
	header('location: index.php?mod=member&act=error');	
	
$a = $_GET['act'];
switch ($a){
	case "delete":
		include('modules/customer/delete.php');
		break;
	case "profile":
		include('modules/customer/profile.php');
		break;		
	case "editprofile":
		include('modules/customer/editprofile.php');
		break;
	case "xl_editprofile":
		include('modules/customer/xl_editprofile.php');
		break;		
	default:
		include('modules/customer/list.php');
		break;		
}
?>