<?php /* Smarty version 3.1.27, created on 2017-03-31 23:44:57
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\listaBP.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172893065558decdd9b65926_00986149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b892c89bbb1bbed963bc568691fd5f4fa473978' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\listaBP.tpl',
      1 => 1490996691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172893065558decdd9b65926_00986149',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58decdd9bfd492_23713970',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58decdd9bfd492_23713970')) {
function content_58decdd9bfd492_23713970 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172893065558decdd9b65926_00986149';
echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <title></title>
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

					<div class="row">
						<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
              <div class="container-fluid" style="margin-top:100px;">




                      <div class="card" >
                        <br>
                        <br>
                        <center>
                            <h3>LISTA DE BIENES PRESTADOS</h3>
                          </center>




                          <div class="">

                              <div class="body">
                                  <table id="dt_bien" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                      <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>CODIGO</th>
                                            <th>COD.PATRIMONIO</th>
                                            <th>COD.INTERNO</th>
                                            <th>OFICINA</th>
                                            <th>TIPO DE BIEN</th>
                                            <th>F.PRESTAMO</th>
                                            <th>F.DEVOLUCION</th>
                                            <th>ESTADO</th>
                                            <th>DEVOLVER</th>
                                              </tr>
                                      </thead>

                                      <tfoot>
                                          <tr>
                                            <th>ID</th>
                                            <th>CODIGO</th>
                                            <th>COD.PATRIMONIO</th>
                                            <th>COD.INTERNO</th>
                                            <th>OFICINA</th>
                                            <th>TIPO DE BIEN</th>
                                            <th>F.PRESTAMO</th>
                                            <th>F.DEVOLUCION</th>
                                            <th>ESTADO</th>
                                            <th>DEVOLVER</th>


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
                                            <td ><?php echo $_smarty_tpl->tpl_vars['tp']->value['id_cargo'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['cod_bien'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['cod_patrimonio'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['cod_interno'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['ofi_cargo'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['tip_bien'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['fec_p_cargo'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['fec_d_cargo'];?>
</td>
                                            <td><b><?php echo $_smarty_tpl->tpl_vars['tp']->value['est_cargo'];?>
 </b> </td>
                                            <?php if ($_smarty_tpl->tpl_vars['tp']->value['est_cargo'] == 'ENTREGADO') {?>
                                            <td><button type='button' id="devolver"class='devolver btn bg-orange'href="?view=detalleBP" ><i class="material-icons" title="devolver">receipt</i></button>
</td>
                                            <?php } else { ?>
                                            <td><b></b> </td>
                                            <?php }?>


                                          </tr>
                                            <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>






                                      </tbody>

                                  </table>
                              </div>

                          </div>
                      </div>
                  </div>

              </div>

						</div>










<?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



            <?php echo '<script'; ?>
 type="text/javascript">
            $(".devolver").on("click",function(){
                      var valores0=$(this).parents("tr").find("td").eq(0).text();
                      var valores1=$(this).parents("tr").find("td").eq(1).text();

                    location.href= '?view=devolBien&id='+valores1;
                    

            });
            $(function () {
                $('.js-basic-example').DataTable();

                //Exportable table
                $('.js-exportable').DataTable({
                    dom: 'Bfrtip',
                    language:idioma_espanol,
                    buttons: [	{
            						"text":"<i class='fa fa-user-plus'></i>",
            						"titleAttr":"IR A BIENES",
            						"action":function()
            						{
            						//	agregar_nuevo_usuario();

            						}
            					},
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });


            });
            var idioma_espanol ={
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
              }


            <?php echo '</script'; ?>
>








</body>

</html>
<?php }
}
?>