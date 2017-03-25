<?php /* Smarty version 3.1.27, created on 2017-03-24 13:16:49
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\EdidUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:203303975358d50e31e08f57_81668414%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c00e2846f7fc1c39f3bfcb808eba620aa7ca9872' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\EdidUser.tpl',
      1 => 1490354194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203303975358d50e31e08f57_81668414',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d50e31e88b89_29543917',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d50e31e88b89_29543917')) {
function content_58d50e31e88b89_29543917 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203303975358d50e31e08f57_81668414';
?>

<?php echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="theme-red">
<!-- Page Loader -->
<?php echo $_smarty_tpl->getSubTemplate ('overall/load.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<?php echo $_smarty_tpl->getSubTemplate ('overall/buscar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- #END# Search Bar -->
<!-- Top Bar -->
<?php echo $_smarty_tpl->getSubTemplate ('overall/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <?php echo $_smarty_tpl->getSubTemplate ('overall/info_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- #User Info -->
        <!-- Menu -->
        <?php echo $_smarty_tpl->getSubTemplate ('overall/nav_movil.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
                                                  <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->_loop = true;
$foreach_tp_Sav = $_smarty_tpl->tpl_vars['tp'];
?>
                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">

                                                                <input id="id"class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['id_user'];?>
" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">

                                                                  <input id="dni" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['dni_user'];?>
" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="nombres" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['nom_user'];?>
" type="text" class="nombres form-control"  placeholder="Nombres" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"> portrait</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['ape_user'];?>
"type="text" class="form-control"  placeholder="Apellidos" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phonelink_ring</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="telefono" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['tel_user'];?>
" type="text" class="form-control"  placeholder="Teléfono"maxlength="9"  maxlength="9" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">location_on</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="direccion" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['dir_user'];?>
"type="text" class="form-control"  placeholder="Dirección" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons">account_box</i>
                              													</span>
                              													<div class="form-line">
                              															<input id="nick" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['nic_user'];?>
" type="text" class="form-control"  placeholder="nick de usuario" required  >
                              													</div>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons">vpn_key</i>
                              													</span>
                              													<div class="form-line">
                              															<input id="pass" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['pas_user'];?>
" class="form-control" placeholder="contraseña" type="password">
                              													</div>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons"> portrait</i>
                              													</span>
                              													<select id="condicion"  class="form-control show-tick">
                                                                          <?php if ($_smarty_tpl->tpl_vars['tp']->value['con_user'] == "CONTRATADO") {?>
                                                                          <option  selected value="CONTRATADO">CONTRATADO</option>
                                                                          <option   value="NOMBRADO">NOMBRADO</option>
                                                                          <?php }?>
                                                                          <?php if ($_smarty_tpl->tpl_vars['tp']->value['con_user'] == "NOMBRADO") {?>
                              																						<option selected  value="NOMBRADO">NOMBRADO</option>
                                                                          <option   value="CONTRATADO">CONTRATADO</option>
                                                                          <?php } else { ?>
                                                                          <option   value="OTRO">OTRO</option>

                                                                          <?php }?>







                              														</select>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons"> portrait</i>
                              													</span>
                              													<select id="estado"class="form-control show-tick" required>
                                                                          <?php if ($_smarty_tpl->tpl_vars['tp']->value['est_user'] == "ACTIVO") {?>
                              																						<option selected value="ACTIVO">ACTIVO</option>
                                                                          <option value="INACTIVO">INACTIVO</option>
                                                                          <?php }?>
                                                                          <?php if ($_smarty_tpl->tpl_vars['tp']->value['est_user'] == "INACTIVO") {?>
                                                                          <option value="ACTIVO">ACTIVO</option>
                              																						<option selected value="INACTIVO">INACTIVO</option>

                                                                          <?php }?>


                              														</select>
                              											</div>

                              										</div>

                                                  <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>

                                                  <button id="btn" class="btn btn-block btn-lg bg-pink waves-effect" type="input">UPDATE USER</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/regis.js"> <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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



<?php echo '</script'; ?>
>



<?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>

</html>
<?php }
}
?>