<?php
$a = $_GET['act'];
//echo $a;
switch($a){
	case "category_product":
		include("modules/search/category_product.php");
		break;
	case "xl_search":
		include("modules/search/xl_search.php");
		break;		
	default:
		include("modules/search/error.php");
		break;
}
?>