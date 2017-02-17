

 <?php

 $template = new smarty();
 if($_SESSION['est_user']=='1'){

   if ($_POST) {
     # code...
   }
   else {
     # code...
     $db = new Conexion();
      $type = isset($_GET['type'])? $_GET['type'] :null;
      $sql = $db->query("SELECT * FROM usuario WHERE id_user=$type");
      $mida="marpas123";
       while ($x = $db->rrecorrer($sql)) {
         # code...
         $posts[] = array(
         'id_user'      =>$x[   'id_user'            ],
         'dni_user'     =>$x[   'dni_user'            ],
         'nom_user'     =>$x[   'nom_user'         ],
         'ape_user'      =>$x[   'ape_user'      ],
         'tel_user'     =>$x[   'tel_user'       ],
         'dir_user'     =>$x[   'dir_user'      ],
         'nic_user'     =>$x[   'nic_user'           ],
         'pas_user'     =>$x[   'pas_user'           ],
         'con_user'     =>$x[   'con_user'      ],
         'est_user'     =>$x[   'est_user'         ],
         'fot_user'     =>$x[   'fot_user'           ]

         );
       }
       $template->assign('posts',$posts);
      // $template->assign('mida',$mida);

       $template->display('public/EdidUser.tpl');
   }




 }else{

     header('location:?view=index');

 }




  ?>
