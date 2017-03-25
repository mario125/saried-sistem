<?php



if($_SESSION['est_user']=="ACTIVO"){
	$template = new Smarty();
	if ($_POST) {
    $db = new Conexion();
    if ($_POST['nombre']=='devolver') {

      require('core/models/class.Acceso.php');
      $acceso = new Acceso();
      $acceso->devolBien();
      exit;

    } else {
      $buscar =$db->real_escape_string($_POST['nombre']);
      $sql = $db->query("SELECT * FROM cargo WHERE cod_bien LIKE'$buscar' AND est_cargo='ENTREGADO'");
      while ($data=mysqli_fetch_assoc($sql))
       {
        $arreglo["data"][]= array_map("utf8_encode",$data);
        }
          echo json_encode($arreglo);



    }



	}
	else {
		$id = isset($_GET['id'])? $_GET['id'] :null;
		$template->assign('id',$id);
    $template->display('public/devolBien.tpl');
	}





}else{

		# code...
		  header('location:?view=index');




}





?>
