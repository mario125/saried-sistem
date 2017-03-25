{include 'overall/head.tpl'}




<body class="signup-pagee theme-red bg-indigo">
  <!-- Page Loader -->
  {include 'overall/load.tpl'}
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Search Bar -->
  {include 'overall/buscar.tpl'}
  <!-- #END# Search Bar -->
  <!-- Top Bar -->
  {include 'overall/navbar.tpl'}
  <!-- #Top Bar -->
  <section>
      <!-- Left Sidebar -->
      <aside id="leftsidebar" class="sidebar">
          <!-- User Info -->
          {include 'overall/info_user.tpl'}
          <!-- #User Info -->
          <!-- Menu -->
          {include 'overall/nav_movil.tpl'}
          <!-- #Menu -->
          <!-- Footer -->

          <!-- #Footer -->
      </aside>
      <!-- #END# Left Sidebar -->
      <!-- Right Sidebar -->

      <!-- #END# Right Sidebar -->
  </section>


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
																						<option value="ACTIVO">ACTIVO</option>
																						<option value="INACTIVO">INACTIVO</option>


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

    <script type="text/javascript" src="styles/js/regis.js"> </script>
    <script type="text/javascript">
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
								          //   alert(connect.responseText);
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
				</script>


		<script src="styles/plugins/bootstrap/js/bootstrap.js"></script>

		<!-- Select Plugin Js -->
		<script src="styles/plugins/bootstrap-select/js/bootstrap-select.js"></script>

		<!-- Slimscroll Plugin Js -->
		<script src="styles/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

		<!-- Waves Effect Plugin Js -->
		<script src="styles/plugins/node-waves/waves.js"></script>

		<!-- Autosize Plugin Js -->
		<script src="styles/plugins/autosize/autosize.js"></script>

		<!-- Moment Plugin Js -->
		<script src="styles/plugins/momentjs/moment.js"></script>

		<!-- Bootstrap Material Datetime Picker Plugin Js -->
		<script src="styles/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

		<!-- Custom Js -->
		<script src="styles/js/admin.js"></script>
		<script src="styles/js/pages/forms/basic-form-elements.js"></script>

		<!-- Demo Js -->
		<script src="styles/js/demo.js"></script>

</body>

</html>
