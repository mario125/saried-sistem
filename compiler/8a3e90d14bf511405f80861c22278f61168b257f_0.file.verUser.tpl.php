<?php /* Smarty version 3.1.27, created on 2017-02-15 23:40:17
         compiled from "C:\xampp\htdocs\proyectoSari\styles\templates\public\verUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2292658a4d8d1677f71_53903982%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3e90d14bf511405f80861c22278f61168b257f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoSari\\styles\\templates\\public\\verUser.tpl',
      1 => 1487198001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2292658a4d8d1677f71_53903982',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a4d8d170d799_88792866',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a4d8d170d799_88792866')) {
function content_58a4d8d170d799_88792866 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2292658a4d8d1677f71_53903982';
echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <title>ADMINISTRADORES</title>
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


            <div class="row clearfix">

              </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Dni</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Condición</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                        <th>Estado</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Dni</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Condición</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                        <th>Estado</th>
                                        <th></th>
                                        <th></th>


                                    </tr>
                                </tfoot>
                                <tbody>

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
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['id_user'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['dni_user'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['nom_user'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['ape_user'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['con_user'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['tel_user'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['dir_user'];?>
</td>
                                        <?php if ($_smarty_tpl->tpl_vars['tp']->value['est_user'] == "1") {?>
                                        <td>ACTIVO</td>
                                        <?php } else { ?>
                                        <td>INACTIVO</td>
                                        <?php }?>
                                        <td><button type="button" class=" boton btn btn-primary waves-effect">VER PERFIL</button></td>
                                        <td><button type="button" class=" boton2 btn btn-primary waves-effect">EDITAR</button></td>
                                    </tr>
                                      <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>
                                    <!--  <tr>
                                        <td>total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>24.00</td>

                                      </tr>-->





                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php echo '<script'; ?>
>
$(document).ready(function(){
    $(".boton").click(function(){

        var valores="";
        var connect,form,result;

        // Obtenemos todos los valores contenidos en los <td> de la fila
        // seleccionada
        $(this).parents("tr:eq(0)").find("td:eq(0)").each(function(){
            valores+=$(this).html()+"\n";
        });
        form='id='+valores;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');

       location.href= '?view=PeUser&type='+valores;





    });
    $(".boton2").click(function(){

        var valores="";
        var connect,form,result;

        // Obtenemos todos los valores contenidos en los <td> de la fila
        // seleccionada
        $(this).parents("tr:eq(0)").find("td:eq(0)").each(function(){
            valores+=$(this).html()+"\n";
        });
        form='id='+valores;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');

       location.href= '?view=EdidUser&type='+valores;





    });
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