<?php



if($_SESSION['est_user']=='1'){
	$template = new Smarty();
	if ($_POST) {

				    	require('core/models/class.Acceso.php');
							$acceso = new Acceso();
							$acceso->RegisBien();
						  exit;
							# code...

	}
	else {
		# code...
    $db = new Conexion();
     $type = isset($_GET['type'])? $_GET['type'] :null;
     $sql = $db->query("SELECT max(id_bien) FROM bien");
     while ($x = $db->rrecorrer($sql)) {
       # code...
       $array = array(
       'id'      =>$x[   'max(id_bien)'   ]

       );
     }
      $clave =array_values($array)[0];
      $cadena = "";
      $clave2=$clave+1;
      $cadena .= "B-00" . $clave2;


    //  echo $posts;
      $template->assign('id',$cadena);
      $template->display('public/regisB.tpl');
	}





}else{
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		# code...
		$file = $_FILES["file"]["name"];
		$filetype = $_FILES["file"]["type"];
		$filesize = $_FILES["file"]["size"];

		if(!is_dir("../../bien/"))
			mkdir("../../bien/", 0777);

		if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../../bien/".$file))
		{

		}
	}
	else {
		# code...
		  header('location:?view=index');
	}



}





?>
