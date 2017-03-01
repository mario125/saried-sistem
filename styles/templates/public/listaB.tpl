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

       {include 'overall/theme.tpl'}
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

                                    {foreach from=$posts item=tp}
                                    <tr>
                                      <td>{$tp.id_bien }</td>
                                      <td>{$tp.cod_bien}</td>
                                      <td>{$tp.tip_bien}</td>
                                      <td>{$tp.det_bien}</td>
                                      <td>{$tp.fec_bien}</td>
                                      <td>{$tp.can_bien}</td>
                                      <td>{$tp.val_bien}</td>
                                      <td>{$tp.est_bien}</td>
                                      <td>{$tp.nom_user}</td>
                                      <td><button type="button" class=" boton btn btn-primary waves-effect"></button></td>

                                    </tr>
                                      {/foreach}
                                     <tr>
                                        <td>total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>S/:{$suma}</td>
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




{include 'overall/js_footer.tpl'}
</body>

</html>
