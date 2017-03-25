{include 'overall/head.tpl'}
  <title>ADMINISTRADORES</title>
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

                                    {foreach from=$posts item=tp}
                                    <tr>
                                        <td>{$tp.id_user}</td>
                                        <td>{$tp.dni_user}</td>
                                        <td>{$tp.nom_user}</td>
                                        <td>{$tp.ape_user}</td>
                                        <td>{$tp.con_user}</td>
                                        <td>{$tp.tel_user}</td>
                                        <td>{$tp.dir_user}</td>
                                        {if $tp.est_user=="ACTIVO"}
                                        <td>ACTIVO</td>
                                        {else}
                                        <td>INACTIVO</td>
                                        {/if}
                                        <td><button type="button" class=" boton btn btn-primary waves-effect">PERFIL</button></td>
                                        <td><button type="button" class=" boton2 btn btn-primary waves-effect">EDITAR</button></td>
                                    </tr>
                                      {/foreach}
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

    <script>
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
</script>

{include 'overall/js_footer.tpl'}
<script src="styles/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>
