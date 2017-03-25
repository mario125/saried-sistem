<?php



if($_SESSION['est_user']=="ACTIVO"){

	if ($_POST) {

							require('core/models/class.Acceso.php');
							$acceso = new Acceso();
							$acceso->RegisUser();
						  exit;




							# code...
	}
	else {
		# code...
		$template = new Smarty();
		$template->display('public/registrarUser.tpl');
	}




}else{
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		# code...
		$file = $_FILES["file"]["name"];
		$filetype = $_FILES["file"]["type"];
		$filesize = $_FILES["file"]["size"];

		if(!is_dir("../../fotos/"))
			mkdir("../../fotos/", 0777);

		if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../../fotos/".$file))
		{

		}
	}
	else {
		# code...
		  header('location:?view=index');
	}



}





?>
