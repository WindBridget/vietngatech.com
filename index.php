<?php
include("includes/config.php");
include("includes/common.php");
include("includes/function.php");

include("modules/header/header.php");
$module = $_GET['mod'];
switch ($module){
	case 'news':
		include ("modules/news/news.php");
		break;
	case 'product':
		include ("modules/product/product.php");
		break;
	case 'about':
		include ("modules/about/about.php");
		break;
	case 'recruit':
		include ("modules/recruit/recruit.php");
		break;
	case 'contact':
		include ("modules/contact/contact.php");
		break;
	case 'search':
		include ("modules/search/search.php");
		break;
	default:
		include("modules/home/home.php");
		break;
}
include("modules/right/right.php");
include("modules/footer/footer.php");
?>