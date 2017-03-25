<?php


if($_SESSION['est_user']=="ACTIVO"){


	$template = new Smarty();
	$template->display('public/admin.tpl');



}else{

    header('location:?view=index');

}



 ?>
