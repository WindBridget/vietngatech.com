<?php
$a = $_GET['act'];
switch ($a){
	case 'profile':
		include('modules/member/profile.php');
		break;
	case 'login':
		include('modules/member/login.php');
		break;
	case 'xl_login':
		include('modules/member/xl_login.php');
		break; 
	case 'editprofile':
		include('modules/member/editprofile.php');
		break;
	case 'xl_editprofile':
		include('modules/member/xl_editprofile.php');
		break;
	case 'logout':
		include('modules/member/logout.php');
		break;	
	case 'error':
		include('modules/member/error.php');
		break;			
	default:
		header('location: index.php');
		break;		
}
?>