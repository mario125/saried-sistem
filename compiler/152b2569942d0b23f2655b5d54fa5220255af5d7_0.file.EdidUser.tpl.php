<?php /* Smarty version 3.1.27, created on 2017-02-16 06:16:21
         compiled from "C:\xampp\htdocs\proyectoSari\styles\templates\public\EdidUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1795758a535a58f0c23_78984628%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '152b2569942d0b23f2655b5d54fa5220255af5d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoSari\\styles\\templates\\public\\EdidUser.tpl',
      1 => 1487222178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1795758a535a58f0c23_78984628',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a535a59bed83_16278568',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a535a59bed83_16278568')) {
function content_58a535a59bed83_16278568 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1795758a535a58f0c23_78984628';
echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
     <?php echo $_smarty_tpl->getSubTemplate ('overall/theme.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
                            <form id="form_validation" method="POST" novalidate="novalidate">

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

                                                                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['id_user'];?>
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

                                                                  <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['dni_user'];?>
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
" type="text" class="form-control"  placeholder="Nombres" required  >
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
                                                                          <?php if ($_smarty_tpl->tpl_vars['tp']->value['est_user'] == "1") {?>
                              																						<option selected value="1">ACTIVO</option>
                                                                          <option value="0">INACTIVO</option>
                                                                          <?php }?>
                                                                          <?php if ($_smarty_tpl->tpl_vars['tp']->value['est_user'] == "0") {?>
                                                                          <option value="1">ACTIVO</option>
                              																						<option selected value="0">INACTIVO</option>

                                                                          <?php }?>


                              														</select>
                              											</div>

                              										</div>

                                                  <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>

                                                  <button id="btn" class="btn btn-block btn-lg bg-pink waves-effect" type="input">UPDATE USER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>

</html>
<?php }
}
?>