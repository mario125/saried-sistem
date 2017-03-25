
{include 'overall/head.tpl'}
<body class="theme-red">
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

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>UPDATE USER</h2>

                        </div>
                        <div class="body">


                                                  <div id="_AJAX_">

                                                  </div>
                                                  {foreach from=$posts item=tp}
                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">

                                                                <input id="id"class="form-control" value="{$tp.id_user}" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">

                                                                  <input id="dni" class="form-control" value="{$tp.dni_user}" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="nombres" value="{$tp.nom_user}" type="text" class="nombres form-control"  placeholder="Nombres" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"> portrait</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="apellidos" value="{$tp.ape_user}"type="text" class="form-control"  placeholder="Apellidos" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phonelink_ring</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="telefono" value="{$tp.tel_user}" type="text" class="form-control"  placeholder="Teléfono"maxlength="9"  maxlength="9" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">location_on</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="direccion" value="{$tp.dir_user}"type="text" class="form-control"  placeholder="Dirección" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons">account_box</i>
                              													</span>
                              													<div class="form-line">
                              															<input id="nick" value="{$tp.nic_user}" type="text" class="form-control"  placeholder="nick de usuario" required  >
                              													</div>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons">vpn_key</i>
                              													</span>
                              													<div class="form-line">
                              															<input id="pass" value="{$tp.pas_user}" class="form-control" placeholder="contraseña" type="password">
                              													</div>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons"> portrait</i>
                              													</span>
                              													<select id="condicion"  class="form-control show-tick">
                                                                          {if $tp.con_user=="CONTRATADO"}
                                                                          <option  selected value="CONTRATADO">CONTRATADO</option>
                                                                          <option   value="NOMBRADO">NOMBRADO</option>
                                                                          {/if}
                                                                          {if $tp.con_user=="NOMBRADO"}
                              																						<option selected  value="NOMBRADO">NOMBRADO</option>
                                                                          <option   value="CONTRATADO">CONTRATADO</option>
                                                                          {else}
                                                                          <option   value="OTRO">OTRO</option>

                                                                          {/if}







                              														</select>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons"> portrait</i>
                              													</span>
                              													<select id="estado"class="form-control show-tick" required>
                                                                          {if $tp.est_user=="ACTIVO"}
                              																						<option selected value="ACTIVO">ACTIVO</option>
                                                                          <option value="INACTIVO">INACTIVO</option>
                                                                          {/if}
                                                                          {if $tp.est_user=="INACTIVO"}
                                                                          <option value="ACTIVO">ACTIVO</option>
                              																						<option selected value="INACTIVO">INACTIVO</option>

                                                                          {/if}


                              														</select>
                              											</div>

                              										</div>

                                                  {/foreach}

                                                  <button id="btn" class="btn btn-block btn-lg bg-pink waves-effect" type="input">UPDATE USER</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
    <script type="text/javascript" src="styles/js/regis.js"> </script>
<script type="text/javascript">
$(document).ready(function()
{

          var tname;
          var puntero1=0;

        document.getElementById('btn').onclick=function(){

            var connect,form,result,id,dni,nombres,apellidos,telefono,direccion,nick,pass,condicion,estado,foto;
              id=document.getElementById('id').value;
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
                     '&id='+id+
                     '&nombres='+nombres+
                     '&apellidos='+apellidos+
                     '&telefono='+telefono+
                     '&direccion='+direccion+
                     '&nick='+nick+
                     '&pass='+pass+
                     '&condicion='+condicion+
                     '&estado='+estado;
            //   alert(form);
               connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');

               if (id!=''&&dni.length==8&& nombres!=''&&apellidos!=''&&telefono.length==9&&direccion!=''&&nick!=''&&pass!=''&&condicion!='0')
               {
                 connect.onreadystatechange =function(){
                   if (connect.readyState==4&&connect.status==200) {
                          //  alert(connect.responseText);
                     if (parseInt(connect.responseText) ==1) {
                             result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';
                             location.href= '?view=admin';
                             document.getElementById('_AJAX_').innerHTML=result;


                     } else if(parseInt(connect.responseText)==2){
                       result='<div class="alert bg-teal alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>ERROR NO SE PUDO ACTUALIZAR..!</div>';
                       document.getElementById('_AJAX_').innerHTML=result;

                     }

                   } else if(connect.readyState!=4){
                     result='<div class="alert bg-green alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>PROCENSANDO--!</div>';
                     document.getElementById('_AJAX_').innerHTML=result;
                   }
                 }

                 connect.open('POST','?view=EdidUser',true);
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



{include 'overall/js_footer.tpl'}
</body>

</html>
