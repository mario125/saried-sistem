<?php /* Smarty version 3.1.27, created on 2017-02-20 04:31:30
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\regisB.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:76346647658aa6312cc7f36_29835670%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f39214d84c4644dca0efe84b94191f879c1aaa11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\regisB.tpl',
      1 => 1487561395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76346647658aa6312cc7f36_29835670',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58aa63133e0254_82529126',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58aa63133e0254_82529126')) {
function content_58aa63133e0254_82529126 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76346647658aa6312cc7f36_29835670';
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
                            <h2>TO REGISTER BIEN</h2>

                        </div>
                        <div class="body">


                                                  <div id="_AJAX_">

                                                  </div>

                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">


                                                                <input id="codigo"class="codigo form-control" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"> portrait</i>
                                                        </span>
                                                        <select id="tipo"  class="tipo form-control show-tick">

                                                                          <option   value="0">TIPO DE BIEN</option>
                                                                          <option   value="ACOMULADOR DE ENERGIA-EQUIPO DE UPS">ACOMULADOR DE ENERGIA-EQUIPO DE UPS</option>
                                                                          <option   value="ANTENA BANDA ANCHA HF">ANTENA BANDA ANCHA HF</option>
                                                                          <option   value="COMPRESORA DE AIRE">COMPRESORA DE AIRE</option>
                                                                          <option   value="CONCENTRADOR DE COMUNICACIONES">CONCENTRADOR DE COMUNICACIONES</option>
                                                                          <option   value="DISCO DURO EXTERNO">DISCO DURO EXTERNO</option>
                                                                          <option   value="EQUIPO DE AUTOSERVICIO">EQUIPO DE AUTOSERVICIO</option>
                                                                          <option   value="EQUIPO DE COMUNICACIONES WAN<">EQUIPO DE COMUNICACIONES WAN</option>
                                                                          <option   value="ESCRITORIO DE MADERA">ESCRITORIO DE MADERA</option>
                                                                          <option   value="GABIENETE DE METAL">GABIENETE DE METAL</option>
                                                                          <option   value="GRABADORA DE DISCO BLU RAY">GRABADORA DE DISCO BLU RAY</option>
                                                                          <option   value="MAQUINA SOPLADORA">MAQUINA SOPLADORA</option>
                                                                          <option   value="MODULO DE MADREA PARA MICROCOMPUTADORA">MODULO DE MADREA PARA MICROCOMPUTADORA</option>
                                                                          <option   value="MONITOR A COLOR">MONITOR A COLOR </option>
                                                                          <option   value="RACK (OTROS)"> RACK (OTROS)</option>
                                                                          <option   value="SERVIDOR">SERVIDOR </option>
                                                                          <option   value="SILLA GIRADORA DE METAL">SILLA GIRADORA DE METAL </option>
                                                                          <option   value="SWITCH PARA PARED">SWITCH PARA PARED </option>
                                                                          <option   value="TECLADO-KEYBOARD ">TECLADO-KEYBOARD </option>
                                                                          <option   value="TELEFONO">TELEFONO </option>
                                                                          <option   value="UNIDAD CENTRAL DE PROCESO-CPU"> UNIDAD CENTRAL DE PROCESO-CPU</option>


                                                          </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"> portrait</i>
                                                        </span>

                                                          <div class="form-line">
                                                              <textarea rows="2" id="descripcion" class="descripcion form-control no-resize" placeholder="DESCRIPCÓN DE BIEN..."></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" id="date-fr" class=" fecha form-control floating-label" value="" placeholder="FECHA">
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"> portrait</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="cantidad" value=""type="text" class="cantidad form-control"  placeholder="CANTIDAD DE BIEN" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phonelink_ring</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="precio" value="" type="text" class="precio form-control"  placeholder="PRECIO DEL BIEN" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="foto">
                                                      <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">account_circle</i>
                                                        </span>

                                                        <div id="dropzone" class="dropzone"></div>
                                                      </div>

                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"> portrait</i>
                                                        </span>
                                                        <select id="estado"class=" estado form-control show-tick" required>
                                                                          <option value="0">ESTADO</option>
                                                                          <option value="1">OPERATIVO</option>
                                                                          <option value="2">INOPERATIVO</option>
                                                                          <option value="3">OBSOLETO</option>

                                                          </select>
                                                    </div>

                                                  </div>
                                                  <button id="mib" class="mib btn-block btn-lg bg-orange " type="input">REGISTRAR BIEN</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function()
{
  $('#date-fr').bootstrapMaterialDatePicker
      ({
        format: 'DD/MM/YYYY HH:mm',
        lang: 'es_PE',
        weekStart: 1,
        cancelText : 'ANNULER',
        nowButton : true,
        switchOnClick : true
      });

});

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/regisB.js"><?php echo '</script'; ?>
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

 <?php echo '<script'; ?>
 src="styles/plugins/sweetalert/sweetalert.min.js"><?php echo '</script'; ?>
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