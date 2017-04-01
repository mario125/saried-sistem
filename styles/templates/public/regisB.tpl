
{include 'overall/head.tpl'}
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
        <div class="block-header">
          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
<<<<<<< HEAD
                        <center>
                            <h3>REGISTRAR BIEN</h3>
                          </center>
=======
                            <h2>REGISTRAR BIEN</h2>
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac

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


                                                                <input id="codigo"class="codigo form-control" value="{$id}" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">


                                                                <input id="codigoP"class="codigoP form-control" value="" placeholder="CODIGO PATRIMONIAL" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">


                                                                <input id="codigoI"class="codigoI form-control" value="" placeholder="CODIGO INTERNO"  type="text">

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
                                                                          <option value='OPERATIVO'>OPERATIVO</option>
<<<<<<< HEAD

=======
                                                                          <option value='INOPERATIVO'>INOPERATIVO</option>
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
                                                                          <option value='OBSOLETO'>OBSOLETO</option>

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
<script type="text/javascript">
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

</script>

<script type="text/javascript" src="styles/js/regisB.js"></script>


<script src="styles/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="styles/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="styles/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="styles/plugins/node-waves/waves.js"></script>

<!-- Autosize Plugin Js -->
<script src="styles/plugins/autosize/autosize.js"></script>

 <script src="styles/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Custom Js -->
<script src="styles/js/admin.js"></script>
<script src="styles/js/pages/forms/basic-form-elements.js"></script>

<!-- Demo Js -->
<script src="styles/js/demo.js"></script>


</body>

</html>
