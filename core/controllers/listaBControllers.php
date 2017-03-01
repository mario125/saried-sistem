<?php

$template = new smarty();
if($_SESSION['est_user']=='1'){

    $db = new Conexion();
    $sql1=$db->query("SELECT ROUND(SUM(val_bien), 2) suma FROM bien;");
    while ($a =$db->rrecorrer($sql1)) {
      # code...
      $suma = array(
        'suma' =>$a['suma']
      );
    }
    $clave =array_values($suma)[0];


    $sql = $db->query("SELECT id_bien,
                              cod_bien,
                              tip_bien,
                              det_bien,
                              fec_bien,
                              can_bien,
                              val_bien,
                              est_bien,usuario.nom_user,usuario.ape_user FROM bien JOIN usuario ON bien.reg_bien=usuario.id_user ORDER BY id_bien ASC");
    while ($x = $db->rrecorrer($sql)) {
      # code...
      $posts[] = array(
      'id_bien'      =>$x[   'id_bien'            ],
      'cod_bien'     =>$x[   'cod_bien'            ],
      'tip_bien'     =>$x[   'tip_bien'         ],
      'det_bien'      =>$x[   'det_bien'      ],
      'fec_bien'     =>$x[   'fec_bien'       ],
      'can_bien'     =>$x[   'can_bien'      ],
      'val_bien'     =>$x[   'val_bien'           ],
      'est_bien'     =>$x[   'est_bien'           ],
      'nom_user'     =>$x[   'nom_user'      ],
      'ape_user'     =>$x[   'ape_user'         ]

      );
    }
    $template->assign('posts',$posts);
    $template->assign('suma',$clave);

    $template->display('public/listaB.tpl');



}else{

    header('location:?view=index');

}




 ?>
