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

    $db = new Conexion();
<<<<<<< HEAD
    $sql = $db->query("SELECT id_cargo,bien.cod_bien,bien.cod_patrimonio,bien.cod_interno,ofi_cargo,bien.tip_bien,bien.fot_bien,fec_p_cargo,fec_d_cargo,est_cargo FROM cargo JOIN bien ON cargo.id_bien=bien.id_bien ORDER BY id_cargo ASC");
=======
    $sql = $db->query("SELECT id_cargo,ofi_cargo,bien.cod_bien,bien.tip_bien,bien.fot_bien,fec_p_cargo,fec_d_cargo,est_cargo FROM cargo JOIN bien ON cargo.id_bien=bien.id_bien ORDER BY id_cargo ASC");
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
    while ($x = $db->rrecorrer($sql)) {
      # code...
      $posts[] = array(
      'id_cargo'      =>$x[   'id_cargo'            ],
      'ofi_cargo'     =>$x[   'ofi_cargo'            ],
<<<<<<< HEAD
      'cod_bien'     =>$x[   'cod_bien'            ],			
			'cod_patrimonio'      =>$x[   'cod_patrimonio'            ],
			'cod_interno'      =>$x[   'cod_interno'            ],
=======
      'cod_bien'     =>$x[   'cod_bien'            ],
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
      'tip_bien'     =>$x[   'tip_bien'         ],
      'fot_bien'     =>$x[   'fot_bien'         ],
      'fec_p_cargo'      =>$x[   'fec_p_cargo'      ],
      'fec_d_cargo'     =>$x[   'fec_d_cargo'       ],
      'est_cargo'     =>$x[   'est_cargo'      ]

      );
    }
    $template->assign('posts',$posts);
    $template->display('public/listaBP.tpl');
	}





}else{

		  header('location:?view=index');




}





?>
