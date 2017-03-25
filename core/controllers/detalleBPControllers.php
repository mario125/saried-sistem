<?php

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
