<?php

<<<<<<< HEAD
$clave="null";
$clave2="null";
$clave3="null";
$clave4="null";
$clave5="null";
$clave6="null";
$clave7="null";

include('core/pdf/mpdf.php');
$type = isset($_GET['type'])? $_GET['type'] :null;
$db = new Conexion();


$sql1=$db->query("SELECT DISTINCT bien.cod_bien,
bien.tip_bien,
bien.det_bien,
bien.fec_bien,
bien.val_bien,
usuario.ape_user ,
usuario.nom_user,
bien.est_bien ,
bien.est_bien
=======
     require_once("core/dompdf/dompdf_config.inc.php");
     $type = isset($_GET['type'])? $_GET['type'] :null;
     $db = new Conexion();
       $sql1=$db->query("SELECT DISTINCT bien.cod_bien,bien.tip_bien,bien.det_bien,bien.fec_bien,bien.val_bien,usuario.ape_user ,usuario.nom_user,bien.est_bien ,bien.est_bien
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
,cargo.ofi_cargo,
cargo.pre_cargo as presto
,cargo.pre_cargo_a,
cargo.fun_p_cargo,
cargo.fec_p_cargo,
cargo.dev_cargo,
cargo.fun_d_cargo,
cargo.fec_d_cargo,
<<<<<<< HEAD
cargo.resepciona_cargo,
cargo.est_cargo,
bien.fot_bien
=======
usuario.nom_user,
usuario.ape_user,
cargo.est_cargo
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
FROM
bien INNER JOIN usuario
ON bien.reg_bien=usuario.id_user
INNER JOIN cargo
ON cargo.id_bien=bien.id_bien
WHERE bien.id_bien=$type");
<<<<<<< HEAD
$sql2=$db->query("SELECT DISTINCT bien.cod_bien,
	                                            bien.cod_patrimonio,
	                                            bien.cod_interno,
																							bien.tip_bien,
																							bien.det_bien,
																							bien.fec_bien,
																							bien.val_bien,
																							usuario.ape_user ,
																							usuario.nom_user,
																							bien.est_bien ,
																							bien.est_bien
																							,cargo.ofi_cargo,
																							cargo.pre_cargo as presto
																							,cargo.pre_cargo_a,
																							cargo.fun_p_cargo,
																							cargo.fec_p_cargo,
																							cargo.dev_cargo,
																							cargo.fun_d_cargo,
																							cargo.fec_d_cargo,
																							cargo.resepciona_cargo,
																							cargo.est_cargo,
																							bien.fot_bien
																							FROM
																							bien INNER JOIN usuario
																							ON bien.reg_bien=usuario.id_user
																							INNER JOIN cargo
																							ON cargo.id_bien=bien.id_bien
																							WHERE bien.id_bien=$type");

if ($row = mysqli_fetch_row($sql1))  {
                     $clave = $row[ 0];
                     $clave2 = $row[ 1];
                     $clave3 = $row[ 2];
                     $clave4 = $row[ 3];
                     $clave5 = $row[ 4];
                     $clave6 = $row[ 8];
                     $clave7 = $row[ 19];




         }

$html='<!DOCTYPE html>
<html>
<head>



	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header class="clearfix">
		<div class="container">

				<img class="logo" style="   height: 100px;
          width: 300px;"src="images/log.png">


		</div>
	</header>

	<section>
		<div class="container">
			<div class="details clearfix">
				<div class="client left">

					<p class="name">CODIGO: </p>
					<p>'.$clave.'</p>
          <p class="name">TIPO:</p>
					<p>'.$clave2.'</p>
          <p class="name">DETALLE:</p>
					<p>'.$clave3.'</p>
          <p class="name">FECHA DE REGISTRO:</p>
					<p>'.$clave4.'</p>
          <p class="name">VALOR:</p>
					<p>'.$clave5.'</p>
          <p class="name">ESTADO ACTUAL:</p>
					<p>'.$clave6.'</p>


				</div>

				<div class="data right">
					<div class="title"></div>
          <div class="container">

      				<img class="logo" style="   height: 100px;
                width: 300px;"src="'.$clave7.'">


      		</div>
				</div>
			</div>

			<table border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
					<th class="qty">COD.PATRIMONIO</th>
					<th class="qty">COD.INTERNO</th>
						<th class="qty">PRESTO</th>
						<th class="desc">OFICINA</th>
						<th class="unit">FECHA P.</th>
						<th class="total">RESEPCION</th>
						<th class="total">DEVOLVIO</th>
						<th class="total">FECHA D.</th>
						<th class="total">ESTADO</th>
					</tr>
				</thead>
				<tbody>';
                        	while ($registro =$db->rrecorrer($sql2)){
																$html.='
																			<tr>
																			<td > '.$registro['cod_patrimonio'].'</td>
																			<td > '.$registro['cod_interno'].'</td>
																				<td > '.$registro['presto'].'</td>
																				<td class="desc"><h3>'.$registro['ofi_cargo'].'</h3>'.$registro['pre_cargo_a'].'</td>
																			  <td > '.$registro['fec_p_cargo'].'</td>
																				<td > '.$registro['resepciona_cargo'].'</td>
																				<td > '.$registro['dev_cargo'].'</td>
																				<td > '.$registro['fec_d_cargo'].'</td>
																				<td > <h3>'.$registro['est_cargo'].' </h3></td>

																			</tr>
																	' ;

																	}







			$html.='</tbody>
			</table>
			<div class="no-break">
				<table class="grand-total">
					<tbody>
					<tr class="total">
							<td class="qty"></td>
							<td class="desc"></td>
							<td class="unit"></td>
							<td class="total"></td>
						</tr>
						<tr class="total">
							<td class="qty"></td>
							<td class="desc"></td>
							<td class="unit"></td>
							<td class="total"></td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="thanks"></div>
			<div class="notice">
				<div></div>
				<div></div>
			</div>
			<div class="end"></div>
		</div>
	</footer>

</body>

</html>


';
$mpdf=new mPDF('c','A4');
$css=file_get_contents('styles/css/pdf.css');
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);

$mpdf->Output('reporte.pdf','I');




 ?>
=======


while($res=mysqli_fetch_array($sql1)){

	$codigo=$res["cod_bien"];



echo $codigo;

}



  echo $type;


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="icon" href="../../favicon.ico" type="image/x-icon">
     <!-- file grup-->
     <link rel="stylesheet" href="styles/css/error.css">
     <link rel="stylesheet" type="text/css" href="styles/bower_components/dropzone/downloads/css/dropzone.css">
     <script type="text/javascript" src="styles/js/jquery-latest.js"></script>
     <script src="styles/plugins/jquery/jquery.min.js"></script>


     <script type="text/javascript" src="styles/bower_components/dropzone/downloads/dropzone.min.js"></script>
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
       <link href="styles/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

     <!-- Bootstrap Core Css -->
     <link href="styles/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

     <!-- Waves Effect Css -->
     <link href="styles/plugins/node-waves/waves.css" rel="stylesheet" />

     <!-- Animation Css -->
     <link href="styles/plugins/animate-css/animate.css" rel="stylesheet" />

     <!-- Bootstrap Material Datetime Picker Css -->
     <link href="styles/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
     <script type="text/javascript" src="styles/plugins/bootstrap-material-datetimepicker/js/moment-with-locales.js"></script>
    <script type="text/javascript" src="styles/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


     <!-- Wait Me Css -->
     <link href="styles/plugins/waitme/waitMe.css" rel="stylesheet" />

     <!-- Bootstrap Select Css -->
     <link href="styles/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

     <!-- Custom Css -->
     <link href="styles/css/style.css" rel="stylesheet">

     <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
     <link href="styles/css/themes/all-themes.css" rel="stylesheet" />

     <link href="styles/css/icon.css" rel="stylesheet" />


     <link href="styles/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">


       <link rel="stylesheet" href="styles/css/font-awesome.min.css">

      <link rel="stylesheet" href="styles/css/auto-complete.css">




      <link rel="stylesheet" href="styles/css/estilos.css">
      <!-- Buttons DataTables -->
      <link rel="stylesheet" href="styles/css/buttons.bootstrap.min.css">
      <link rel="stylesheet" href="styles/css/font-awesome.min.css">




   </head>
   <body>
     <div class="row"  id="se">
       <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="container-fluid" style="margin-top:100px;">




                       <div class="card" >




                           <div class="">

                               <div class="body">
                                  <table id="dt_bien" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>CODIGO</th>
                                               <th>TIPO</th>
                                               <th>DETALLE</th>
                                               <th>FECHA</th>
                                               <th>CANTIDAD</th>
                                               <th>VALOR</th>
                                               <th>ESTADO</th>
                                               <th>REGISTRADOR</th>
                                               <th></th>

                                           </tr>
                                       </thead>

                                       <tfoot>
                                           <tr>
                                             <th>ID</th>
                                             <th>CODIGO</th>
                                             <th>TIPO</th>
                                             <th>DETALLE</th>
                                             <th>FECHA R</th>
                                             <th>CANTIDAD</th>
                                             <th>VALOR</th>
                                             <th>ESTADO</th>
                                             <th>REGISTRADOR</th>
                                             <th></th>


                                           </tr>
                                       </tfoot>
                                       <tbody>

                                           {foreach from=$posts item=tp}
                                           <tr>
                                             <td >{$tp.id_bien }</td>
                                             <td>{$tp.cod_bien}</td>
                                             <td>{$tp.tip_bien}</td>
                                             <td>{$tp.det_bien}</td>
                                             <td>{$tp.fec_bien}</td>
                                             <td>{$tp.can_bien}</td>
                                             <td>{$tp.val_bien}</td>
                                             <td>{$tp.est_bien}</td>
                                             <td>{$tp.nom_user}</td>
                                             <td><button type='button' id="editar"class='editar btn btn-primary'><i class="material-icons" title="editar">create </i></button>
                                                 <button type='button' id="prestar"class='prestar btn btn-danger'><i class="material-icons" title="prestar">pan_tool </i></button>
                                              <button type='button' id="detalle"class='detalle btn bg-orange'><i class="material-icons" title="detalle">receipt</i></button>
                                             </td>

                                           </tr>
                                             {/foreach}
                                            <tr>
                                               <td>total</td>
                                               <td></td>
                                               <td></td>
                                               <td></td>
                                               <td></td>
                                               <td></td>
                                               <td>S/:{$suma}</td>
                                               <td></td>
                                               <td></td>
                                               <td></td>



                                             </tr>





                                       </tbody>

                                   </table>
                               </div>

                           </div>
                       </div>
                   </div>

               </div>


     </div>
     <script src="styles/plugins/jquery-datatable/jquery.dataTables.js"></script>
     <script src="styles/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
     <script src="styles/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
     <script src="styles/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
     <script src="styles/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
     <script src="styles/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
     <script src="styles/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
     <script src="styles/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
     <script src="styles/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
     <script type="text/javascript">
              $(function () {
                  $('.js-basic-example').DataTable();

                  //Exportable table
                  $('.js-exportable').DataTable({
                      dom: 'Bfrtip',
                      language:idioma_espanol,
                      buttons: [	{
                          "text":"<i class='fa fa-user-plus'></i>",
                          "titleAttr":"listaBIENES",
                          "action":function()
                          {
                          //	agregar_nuevo_usuario();
                           location.href= '?view=listaB';
                          }
                        },
                          'copy', 'csv', 'excel', 'pdf', 'print'
                      ]
                  });


              });
              var idioma_espanol ={
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ registros",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sSearch":         "Buscar:",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                      "sFirst":    "Primero",
                      "sLast":     "Último",
                      "sNext":     "Siguiente",
                      "sPrevious": "Anterior"
                  },
                  "oAria": {
                      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                  }
                }


              </script>

     <script src="styles/js/auto-complete.js"></script>


   </body>
 </html>
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
