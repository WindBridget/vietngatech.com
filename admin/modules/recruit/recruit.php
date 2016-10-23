<?php
if($_SESSION['ok']!=1){
	header('location: index.php?mod=member&act=login');
	break;
}	

if(!chk_permision())
	header('location: index.php?mod=member&act=error');	
	
$a = $_GET['act'];
switch ($a){
	case "edit":
		include('modules/recruit/edit.php');
		break;
	case "xl_edit":
		include('modules/recruit/xl_edit.php');
		break;		
}
?>