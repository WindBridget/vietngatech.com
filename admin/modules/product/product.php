<?php
if($_SESSION['ok']!=1){
	header('location: index.php?mod=member&act=login');
	break;
}	

if(!chk_permision())
	header('location: index.php?mod=member&act=error');	
?>
<?php
$a = $_GET['act'];
//echo $a;
switch($a){
	case "detail":
		include("modules/product/detail.php");
		break;
	case "insert":
		include("modules/product/insert.php");
		break;
	case "xl_insert":
		include("modules/product/xl_insert.php");
		break;
	case "edit":
		include("modules/product/edit.php");
		break;
	case "xl_edit":
		include("modules/product/xl_edit.php");
		break;
	case "delete":
		include("modules/product/delete.php");
		break;				
	case "list_category":
		include("modules/product/list_category.php");
		break;		
	case "detail_category":
		include("modules/product/detail_category.php");
		break;							
	case "insert_category":
		include("modules/product/insert_category.php");
		break;
	case "xl_insert_category":
		include("modules/product/xl_insert_category.php");
		break;
	case "edit_category":
		include("modules/product/edit_category.php");
		break;
	case "xl_edit_category":
		include("modules/product/xl_edit_category.php");
		break;
	case "delete_category":
		include("modules/product/delete_category.php");
		break;					
	default:
		include("modules/product/list.php");
		break;
}
?>