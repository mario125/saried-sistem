

 <?php

 $template = new smarty();
 if($_SESSION['est_user']=="ACTIVO"){

   if ($_POST) {
     # code...
     require('core/models/class.Acceso.php');
     $acceso = new Acceso();
     $acceso->prestarB();
     exit;
   }
   else {

   }




 }else{

     header('location:?view=index');

 }




  ?>
