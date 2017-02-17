<?php


if($_SESSION['est_user']=='1'){


	$template = new Smarty();
	$template->display('public/admin.tpl');



}else{

    header('location:?view=index');

}



 ?>
