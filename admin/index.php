<?php
ob_start();
session_start();
if(isset($_SESSION['lang'])){
	if(isset($_GET['lang']))
		$_SESSION['lang'] = $_GET['lang'];
}
else
	$_SESSION['lang'] = 1;	
$id_lang = $_SESSION['lang'];
include("../includes/config.php");
include("../includes/common.php");
include("../includes/function.php");
include("modules/header/header.php");
include("modules/left/left.php");
$module = $_GET['mod'];		
switch($module){	
	case 'slides':
		include("modules/slides/slides.php");
		break;
	case 'news':
		include("modules/news/news.php");
		break;
	case 'about':
		include("modules/about/about.php");
		break;
	case 'recruit':
		include("modules/recruit/recruit.php");
		break;	
	case 'product':
		include("modules/product/product.php");
		break;
	case 'contact':
		include("modules/contact/contact.php");
		break;
	case 'member':
		include("modules/member/member.php");
		break;		
					
		
	default:
		include("modules/home/home.php");
		break;		
}
include("modules/right/right.php");
include("modules/footer/footer.php");
?>