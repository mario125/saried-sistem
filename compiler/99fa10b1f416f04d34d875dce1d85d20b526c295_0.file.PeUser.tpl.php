<?php /* Smarty version 3.1.27, created on 2017-02-19 10:12:40
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\PeUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:98770092358a961886ea039_24616649%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99fa10b1f416f04d34d875dce1d85d20b526c295' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\PeUser.tpl',
      1 => 1487202655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98770092358a961886ea039_24616649',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a96188d02416_64598738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a96188d02416_64598738')) {
function content_58a96188d02416_64598738 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '98770092358a961886ea039_24616649';
?>


<?php echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="theme-red  ">
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
  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADMIN <small>Perfil</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">EDITAR</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
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
                          <div class="col-md-12">

                            <div class="image" >
                              <center>
                                <img  style="border-radius: 100px;"src="<?php echo $_smarty_tpl->tpl_vars['tp']->value['fot_user'];?>
" width="200" height="200" alt="User" />
                              </center>
                            </div>

                          </div>
                          <div class="col-md-4">
                            <h5>
                                NOMBRES Y APELLIDOS:
                            </h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['tp']->value['nom_user'];?>
  <?php echo $_smarty_tpl->tpl_vars['tp']->value['ape_user'];?>
 </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                DNI:
                            </h5>
                            <p>N°<?php echo $_smarty_tpl->tpl_vars['tp']->value['dni_user'];?>
  </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                TÉLEFONO:
                            </h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['tp']->value['tel_user'];?>
   </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                DIRECCIÓN:
                            </h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['tp']->value['dir_user'];?>
   </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                TÉLEFONO:
                            </h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['tp']->value['tel_user'];?>
   </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                CONDICIÓN:
                            </h5>
                            <p><?php echo $_smarty_tpl->tpl_vars['tp']->value['con_user'];?>
   </p>
                          </div>
                          <div class="col-md-12">
                            <h5>
                                ESTADO:
                            </h5>
                            <?php if ($_smarty_tpl->tpl_vars['tp']->value['est_user'] == "1") {?>
                            <p>Activo</p>
                            <?php } else { ?>
                            <p>Inacivo</p>
                            <?php }?>

                          </div>


                         Perfil de usuario administrador <b id="id" ><?php echo $_smarty_tpl->tpl_vars['tp']->value['id_user'];?>
 </b>
                        <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>

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