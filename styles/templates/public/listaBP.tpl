{include 'overall/head.tpl'}

  <title></title>
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

                                          {foreach from=$posts item=tp}
                                          <tr>
                                            <td >{$tp.id_cargo }</td>
                                            <td>{$tp.cod_bien}</td>
                                            <td>{$tp.cod_patrimonio}</td>
                                            <td>{$tp.cod_interno}</td>
                                            <td>{$tp.ofi_cargo}</td>
                                            <td>{$tp.tip_bien}</td>
                                            <td>{$tp.fec_p_cargo}</td>
                                            <td>{$tp.fec_d_cargo}</td>
                                            <td><b>{$tp.est_cargo} </b> </td>
                                            {if $tp.est_cargo=='ENTREGADO'}
                                            <td><button type='button' id="devolver"class='devolver btn bg-orange'href="?view=detalleBP" ><i class="material-icons" title="devolver">receipt</i></button>
</td>
                                            {else}
                                            <td><b></b> </td>
                                            {/if}


                                          </tr>
                                            {/foreach}






                                      </tbody>

                                  </table>
                              </div>

                          </div>
                      </div>
                  </div>

              </div>

						</div>










{include 'overall/js_footer.tpl'}


            <script type="text/javascript">
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


            </script>








</body>

</html>
