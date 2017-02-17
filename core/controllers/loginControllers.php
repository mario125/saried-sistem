<?php


if(!isset($_SESSION['id_user'],
          $_SESSION['dni_user'],
          $_SESSION['nom_user'],
          $_SESSION['ape_user'],
          $_SESSION['con_user'],
          $_SESSION['tel_user'],
          $_SESSION['dir_user'],
          $_SESSION['fot_user'],
          $_SESSION['nic_user'],
          $_SESSION['pas_user'],
          $_SESSION['est_user'])){

    if ($_POST) {

	require('core/models/class.Acceso.php');
	$acceso = new Acceso();
	$acceso->Login();
	exit;

	# code...
    }else {
	$template = new Smarty();
	$template->display('public/login.tpl');
	# code...
    }


}else{

    header('location:?view=index');

}




 ?>
