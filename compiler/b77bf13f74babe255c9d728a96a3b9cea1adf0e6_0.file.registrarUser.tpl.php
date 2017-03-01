<?php /* Smarty version 3.1.27, created on 2017-02-20 03:52:54
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\registrarUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5190578158aa5a06d8f3a6_87122408%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77bf13f74babe255c9d728a96a3b9cea1adf0e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\registrarUser.tpl',
      1 => 1487559157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5190578158aa5a06d8f3a6_87122408',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58aa5a06dd4121_70996422',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58aa5a06dd4121_70996422')) {
function content_58aa5a06dd4121_70996422 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5190578158aa5a06d8f3a6_87122408';
echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<body class="signup-pagee">

    <div class="signup-box">
        <div class="logo">
            <p style="a:link{ text-decoration:none; }  ">Registrar<b>ADMIN</b></p>
            <small>UNAMBA- Abancay</small>
        </div>
        <div class="card">
            <div class="body">



                    <div id="_AJAX_">

                    </div>

                    <div class="col-md-6">

                          <div class="input-group">

                              <span class="input-group-addon">
                                  <i class="material-icons">picture_in_picture</i>
                              </span>
                              <div class="form-line">
                                  <input id="dni" type="text" class=" dni form-control" maxlength="8"  maxlength="8" placeholder="Dni" required >
                              </div>
                          </div>



                    </div>
                    <div class="col-md-6">

                      <div class="input-group">
                          <span class="input-group-addon">
                              <i class="material-icons">face</i>
                          </span>
                          <div class="form-line">
                              <input id="nombres" type="text" class="nombres form-control"  placeholder="Nombres" required  >
                          </div>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                          <span class="input-group-addon">
                              <i class="material-icons"> portrait</i>
                          </span>
                          <div class="form-line">
                              <input id="apellidos" type="text" class="apellidos form-control"  placeholder="Apellidos" required  >
                          </div>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                          <span class="input-group-addon">
                              <i class="material-icons">phonelink_ring</i>
                          </span>
                          <div class="form-line">
                              <input id="telefono" type="text" class="telefono form-control"  placeholder="Teléfono"maxlength="9"   required  >
                          </div>
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="input-group">
                          <span class="input-group-addon">
                              <i class="material-icons">location_on</i>
                          </span>
                          <div class="form-line">
                              <input id="direccion" type="text" class="direccion form-control"  placeholder="Dirección" required  >
                          </div>
                      </div>

                    </div>
										<div class="col-md-6">
											<div class="input-group">
													<span class="input-group-addon">
															<i class="material-icons">account_box</i>
													</span>
													<div class="form-line">
															<input id="nick" type="text" class=" nick form-control"  placeholder="nick de usuario" required  >
													</div>
											</div>

										</div>
										<div class="col-md-6">
											<div class="input-group">
													<span class="input-group-addon">
															<i class="material-icons">vpn_key</i>
													</span>
													<div class="form-line">
															<input id="pass" class=" pass form-control" placeholder="contraseña" type="password">
													</div>
											</div>

										</div>

										<div class="col-md-6">
											<div class="input-group">
													<span class="input-group-addon">
															<i class="material-icons"> portrait</i>
													</span>
													<select id="condicion" class="condi form-control show-tick">
																						<option value="0"> CONDICIÓN </option>
																						<option value="CONTRATADO">CONTRATADO</option>
																						<option value="NOMBRADO">NOMBRADO</option>
																						<option value="OTRO">OTRO</option>

														</select>
											</div>

										</div>
										<div class="col-md-6">
											<div class="input-group">
													<span class="input-group-addon">
															<i class="material-icons"> portrait</i>
													</span>
													<select id="estado"class=" estado form-control show-tick" required>
																						<option value="2"> ESTADO </option>
																						<option value="1">ACTIVO</option>
																						<option value="0">INACTIVO</option>


														</select>
											</div>

										</div>


										<div class="col-md-12">
											<div class="input-group">
												<span class="input-group-addon">
														<i class="material-icons">account_circle</i>
												</span>

												<div id="dropzone" class="dropzone"></div>
											</div>


										</div>

                    <button id="btn" class="btn btn-block btn-lg bg-pink waves-effect" type="input">REGISTRAR</button>



            </div>
        </div>
    </div>








		<!-- Bootstrap Core Js -->

    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/regis.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function()
				{
									var name ="anom.png";
									var tname;
									var puntero1=0;

									Dropzone.autoDiscover = false;
									$("#dropzone").dropzone(
										{
																url: "core/controllers/registrarUserControllers.php",
																addRemoveLinks: true,
																maxFileSize: 1000,
																dictResponseError: "Ha ocurrido un error en el server",
																acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF',
																complete: function(file)
																{
																	if(file.status == "success" &&puntero1==0)
																	{
																		name=file.name;

																	//	alert("El siguiente archivo ha subido correctamente: " + file.name);
																		puntero1=1;
																	}
																	else {
																		alert("Ya existe una foto ..!!");
																		name = file.name;

 																			var element;
 																			(element = file.previewElement) != null ?
 																			element.parentNode.removeChild(file.previewElement) :
 																			false;


																	}
																},
																error: function(file)
																{
																	alert("Error subiendo el archivo " + file.name);
																},
																removedfile: function(file, serverFileName)
																{
																	 name = file.name;

																			var element;
																			(element = file.previewElement) != null ?
																			element.parentNode.removeChild(file.previewElement) :
																			false;
																		//	alert("El elemento fué eliminado: " + name);
																		puntero1=0;


																}
									});

									document.getElementById('btn').onclick=function(){

										var connect,form,result,dni,nombres,apellidos,telefono,direccion,nick,pass,condicion,estado,foto;
											dni=document.getElementById('dni').value;
											nombres=document.getElementById('nombres').value;
											apellidos=document.getElementById('apellidos').value;
											telefono=document.getElementById('telefono').value;
											direccion=document.getElementById('direccion').value;
											nick=document.getElementById('nick').value;
											pass=document.getElementById('pass').value;
											condicion=document.getElementById('condicion').value;
											estado=document.getElementById('estado').value;
											foto=name;

											  form='dni='+dni+
												     '&nombres='+nombres+
														 '&apellidos='+apellidos+
														 '&telefono='+telefono+
														 '&direccion='+direccion+
														 '&nick='+nick+
														 '&pass='+pass+
														 '&condicion='+condicion+
														 '&estado='+estado+
														 '&foto='+foto;

											 connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');

											 if (dni.length==8&& nombres!=''&&apellidos!=''&&telefono.length==9&&direccion!=''&&nick!=''&&pass!=''&&condicion!='0'&&estado!='2')
                       {
												 connect.onreadystatechange =function(){
								           if (connect.readyState==4&&connect.status==200) {
								             //alert(connect.responseText);
								             if (parseInt(connect.responseText) ==1) {
								                     result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';
								                     location.href= '?view=admin';
								                     document.getElementById('_AJAX_').innerHTML=result;


								             } else if(parseInt(connect.responseText)==2){
								               result='<div class="alert bg-teal alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>EL USUARIO  YA EXISTE..!</div>';
								               document.getElementById('_AJAX_').innerHTML=result;

								             }else  if(parseInt(connect.responseText)==3){
								               result='<div class="alert bg-pink alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> INTENTE CON OTRO NICK. . !</div>';
								               document.getElementById('_AJAX_').innerHTML=result;
								             }

								           } else if(connect.readyState!=4){
								             result='<div class="alert bg-green alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>PROCENSANDO--!</div>';
								             document.getElementById('_AJAX_').innerHTML=result;
								           }
								         }

												 connect.open('POST','?view=registrarUser',true);
												 connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
												 connect.send(form);


											 }
											 else {
												 result='<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>FALTAN DATOS..! </div>';
												 document.getElementById('_AJAX_').innerHTML=result;
											 }




											//alert(dni+"-"+nombres+"-"+apellidos+"-"+telefono+"-"+direccion+"-"+nick+"-"+pass+"-"+condicion+"-"+estado+"-"+foto);
										//	alert(form);

									}

				});
				<?php echo '</script'; ?>
>


		<?php echo '<script'; ?>
 src="styles/plugins/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>

		<!-- Select Plugin Js -->
		<?php echo '<script'; ?>
 src="styles/plugins/bootstrap-select/js/bootstrap-select.js"><?php echo '</script'; ?>
>

		<!-- Slimscroll Plugin Js -->
		<?php echo '<script'; ?>
 src="styles/plugins/jquery-slimscroll/jquery.slimscroll.js"><?php echo '</script'; ?>
>

		<!-- Waves Effect Plugin Js -->
		<?php echo '<script'; ?>
 src="styles/plugins/node-waves/waves.js"><?php echo '</script'; ?>
>

		<!-- Autosize Plugin Js -->
		<?php echo '<script'; ?>
 src="styles/plugins/autosize/autosize.js"><?php echo '</script'; ?>
>

		<!-- Moment Plugin Js -->
		<?php echo '<script'; ?>
 src="styles/plugins/momentjs/moment.js"><?php echo '</script'; ?>
>

		<!-- Bootstrap Material Datetime Picker Plugin Js -->
		<?php echo '<script'; ?>
 src="styles/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"><?php echo '</script'; ?>
>

		<!-- Custom Js -->
		<?php echo '<script'; ?>
 src="styles/js/admin.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="styles/js/pages/forms/basic-form-elements.js"><?php echo '</script'; ?>
>

		<!-- Demo Js -->
		<?php echo '<script'; ?>
 src="styles/js/demo.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
?>