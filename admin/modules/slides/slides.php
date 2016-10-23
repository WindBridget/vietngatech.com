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
		include("modules/slides/detail.php");
		break;
	case "insert":
		include("modules/slides/insert.php");
		break;
	case "xl_insert":
		include("modules/slides/xl_insert.php");
		break;
	case "edit":
		include("modules/slides/edit.php");
		break;
	case "xl_edit":
		include("modules/slides/xl_edit.php");
		break;
	case "delete":
		include("modules/slides/delete.php");
		break;				
	case "list_category":
		include("modules/slides/list_category.php");
		break;		
	case "detail_category":
		include("modules/slides/detail_category.php");
		break;							
	case "insert_category":
		include("modules/slides/insert_category.php");
		break;
	case "xl_insert_category":
		include("modules/slides/xl_insert_category.php");
		break;
	case "edit_category":
		include("modules/slides/edit_category.php");
		break;
	case "xl_edit_category":
		include("modules/slides/xl_edit_category.php");
		break;
	case "delete_category":
		include("modules/slides/delete_category.php");
		break;					
	default:
		include("modules/slides/list.php");
		break;
}
?>