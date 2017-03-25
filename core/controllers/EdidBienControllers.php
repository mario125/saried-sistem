<?php



if($_SESSION['est_user']=="ACTIVO"){
	$template = new Smarty();
	if ($_POST) {

				    	require('core/models/class.Acceso.php');
							$acceso = new Acceso();
							$acceso->EdidBien();
						  exit;
							# code...

	}
	else {

	}





}else{

		  header('location:?view=index');




}





?>
