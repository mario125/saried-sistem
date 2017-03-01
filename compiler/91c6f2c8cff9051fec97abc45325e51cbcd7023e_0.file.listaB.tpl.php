<?php /* Smarty version 3.1.27, created on 2017-02-22 09:39:34
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\listaB.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:125539953558ad4e4679d2a1_17660635%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c6f2c8cff9051fec97abc45325e51cbcd7023e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\listaB.tpl',
      1 => 1487752771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125539953558ad4e4679d2a1_17660635',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
    'suma' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ad4e4680ff26_48345771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ad4e4680ff26_48345771')) {
function content_58ad4e4680ff26_48345771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '125539953558ad4e4679d2a1_17660635';
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

       <?php echo $_smarty_tpl->getSubTemplate ('overall/theme.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      <!-- #END# Right Sidebar -->
  </section>


        <div class="container-fluid" style="margin-top:100px;">


            <div class="row clearfix">

              </div>
                <div class="card" >
                    <div class="">

                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
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
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['id_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['cod_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['tip_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['det_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['fec_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['can_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['val_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['est_bien'];?>
</td>
                                      <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['nom_user'];?>
</td>
                                      <td><button type="button" class=" boton btn btn-primary waves-effect"></button></td>

                                    </tr>
                                      <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>
                                     <tr>
                                        <td>total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>S/:<?php echo $_smarty_tpl->tpl_vars['suma']->value;?>
</td>
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




<?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>

</html>
<?php }
}
?>