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
		include("modules/news/detail.php");
		break;
	case "insert":
		include("modules/news/insert.php");
		break;
	case "xl_insert":
		include("modules/news/xl_insert.php");
		break;
	case "edit":
		include("modules/news/edit.php");
		break;
	case "xl_edit":
		include("modules/news/xl_edit.php");
		break;
	case "delete":
		include("modules/news/delete.php");
		break;				
	case "list_category":
		include("modules/news/list_category.php");
		break;		
	case "detail_category":
		include("modules/news/detail_category.php");
		break;							
	case "insert_category":
		include("modules/news/insert_category.php");
		break;
	case "xl_insert_category":
		include("modules/news/xl_insert_category.php");
		break;
	case "edit_category":
		include("modules/news/edit_category.php");
		break;
	case "xl_edit_category":
		include("modules/news/xl_edit_category.php");
		break;
	case "delete_category":
		include("modules/news/delete_category.php");
		break;					
	default:
		include("modules/news/list.php");
		break;
}
?>