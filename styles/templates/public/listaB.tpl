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

          <!-- #Menu -->
          <!-- Footer -->

          <!-- #Footer -->
      </aside>
      <!-- #END# Left Sidebar -->
      <!-- Right Sidebar -->

      <!-- #END# Right Sidebar -->
  </section>

  <div class="row"  id="pri">
    <div class="col-sm-12 col-md-12 col-lg-12 ">
            <form class="form-horizontal" action="" method="POST">
              <section class="content">
                  <div class="container-fluid">
                      <div class="block-header">
                        <div class="row clearfix">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="card">
                                      <div class="header">
<<<<<<< HEAD
                                         <center>
                                            <h3>EDITAR  BIEN REGISTRADO</h3>
                                          </center>
=======
                                          <h2>EDITAR BIEN</h2>
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac

                                      </div>
                                      <div class="body">


                                                                <div id="_AJAX_">

                                                                </div>

                                                                           <input id="id"class="id form-control" value=""    style="display:none">



                                                                <div class="col-md-6">
                                                                  <p>
                                                                      <b>CODIGO:</b>
                                                                  </p>

                                                                      <div class="input-group">
                                                                          <div class="form-line">
                                                                           <input id="codigo"class="codigo form-control" value=""    type="text" disabled="bloqueado">

                                                                          </div>
                                                                      </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <p>
                                                                      <b>TIPO:</b>
                                                                  </p>
                                                                  <div class="input-group">

                                                                      <select name='tipo' id='tipo' class="tipo form-control show-tick"  >
                                                                          <option value='0'>tipo de bien</option>
                                                                          <option   value='ACOMULADOR DE ENERGIA-EQUIPO DE UPS'>ACOMULADOR DE ENERGIA-EQUIPO DE UPS</option>
                                                                          <option   value='ANTENA BANDA ANCHA HF'>ANTENA BANDA ANCHA HF</option>
                                                                          <option   value='COMPRESORA DE AIRE'>COMPRESORA DE AIRE</option>
                                                                          <option   value='CONCENTRADOR DE COMUNICACIONES'>CONCENTRADOR DE COMUNICACIONES</option>
                                                                          <option   value='DISCO DURO EXTERNO'>DISCO DURO EXTERNO</option>
                                                                          <option   value='EQUIPO DE AUTOSERVICIO'>EQUIPO DE AUTOSERVICIO</option>
                                                                          <option   value='EQUIPO DE COMUNICACIONES WAN<'>EQUIPO DE COMUNICACIONES WAN</option>
                                                                          <option   value='ESCRITORIO DE MADERA'>ESCRITORIO DE MADERA</option>
                                                                          <option   value='GABIENETE DE METAL'>GABIENETE DE METAL</option>
                                                                          <option   value='GRABADORA DE DISCO BLU RAY'>GRABADORA DE DISCO BLU RAY</option>
                                                                          <option   value='MAQUINA SOPLADORA'>MAQUINA SOPLADORA</option>
                                                                          <option   value='MODULO DE MADREA PARA MICROCOMPUTADORA'>MODULO DE MADREA PARA MICROCOMPUTADORA</option>
                                                                          <option   value='MONITOR A COLOR'>MONITOR A COLOR </option>
                                                                          <option   value='RACK (OTROS)'> RACK (OTROS)</option>
                                                                          <option   value='SERVIDOR'>SERVIDOR </option>
                                                                          <option   value='SILLA GIRADORA DE METAL'>SILLA GIRADORA DE METAL </option>
                                                                          <option   value='SWITCH PARA PARED'>SWITCH PARA PARED </option>
                                                                          <option   value='TECLADO-KEYBOARD '>TECLADO-KEYBOARD </option>
                                                                          <option   value='TELEFONO'>TELEFONO </option>
                                                                          <option   value='UNIDAD CENTRAL DE PROCESO-CPU'> UNIDAD CENTRAL DE PROCESO-CPU</option>
                                                                      </select>
                                                                  </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                  <p>
                                                                      <b>DESCRIPCIÓN:</b>
                                                                  </p>
                                                                    <div class="input-group">


                                                                        <div class="form-line">
                                                                            <textarea rows="2" id="descripcion" class="descripcion form-control no-resize" ></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                  <p>
                                                                      <b>FECHA:</b>
                                                                  </p>
                                                                  <div class="input-group">

                                                                      <div class="form-line">
                                                                          <input type="text" id="date-fr" class=" fecha form-control floating-label" value=""  disabled="">
                                                                      </div>
                                                                  </div>

                                                                </div>
                                                                <div class="col-md-4">
                                                                  <p>
                                                                      <b>CANTIDAD:</b>
                                                                  </p>
                                                                  <div class="input-group">

                                                                      <div class="form-line">
                                                                          <input id="cantidad" value=""type="text" class="cantidad form-control"   disabled="" >
                                                                      </div>
                                                                  </div>

                                                                </div>
                                                                <div class="col-md-4">
                                                                  <p>
                                                                      <b>PRECIO:</b>
                                                                  </p>
                                                                  <div class="input-group">

                                                                      <div class="form-line">
                                                                          <input id="precio" value="" type="text" class="precioo form-control"  required   >
                                                                      </div>
                                                                  </div>

                                                                </div>

                                                                <div class="col-md-6">
                                                                  <p>
                                                                      <b>ESTADO:</b>
                                                                  </p>
                                                                  <div class="input-group">

                                                                      <select id="estado"class=" estado form-control show-tick" required>
                                                                                        <option value='0'>estado</option>
                                                                                        <option value='OPERATIVO'>OPERATIVO</option>
<<<<<<< HEAD

=======
                                                                                        <option value='INOPERATIVO'>INOPERATIVO</option>
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
                                                                                        <option value='OBSOLETO'>OBSOLETO</option>

                                                                        </select>
                                                                  </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                  <p>
                                                                      <b>REGISTRADO POR:</b>
                                                                  </p>
                                                                  <div class="input-group">

                                                                      <div class="form-line">
                                                                          <input id="regis" value="" type="text" class="regis form-control"   disabled=""  >
                                                                      </div>
                                                                  </div>

                                                                </div>




                                                                <div class="row clearfix demo-button-sizes">
                                                                                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                                                                                </div>
                                                                                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                                                                                </div>
                                                                                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                                                                                    <button type="button" id="guardar_e"class="btn bg-cyan btn-block btn-lg waves-effect">GUARDAR</button>

                                                                                                </div>
                                                                                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                                                                                    <button type="button" id="listar_e"class="btn bg-cyan btn-block btn-lg waves-effect">LISTAR</button>
                                                                                                </div>
                                                                                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                                                                                </div>
                                                                                                <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                                                                                </div>
                                                                                            </div>



                                      </div>
                                  </div>
                              </div>
                          </div>

<<<<<<< HEAD

                      </div>
                  </div>
              </section>
            </form>
            <div class="col-sm-offset-2 col-sm-8">
              <p class="mensaje"></p>
            </div>

          </div>



=======

                      </div>
                  </div>
              </section>
            </form>
            <div class="col-sm-offset-2 col-sm-8">
              <p class="mensaje"></p>
            </div>

          </div>



>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
  </div>
  <div class="row"  id="se">
    <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="container-fluid" style="margin-top:100px;">
<<<<<<< HEAD

                    <div class="card" >
                      <br>
=======
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac

                      <center>
                          <h3>LISTA DE BIENES REGISTRADOS</h3>
                        </center>

<<<<<<< HEAD



                        <div class="">

                            <div class="body">
                               <table id="dt_bien" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CODIGO</th>
                                            <th>TIPO</th>
                                            <th>DETALLE</th>
                                            <th>FECHA</th>
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
                                          <td >{$tp.id_bien }</td>
                                          <td>{$tp.cod_bien}</td>
                                          <td>{$tp.tip_bien}</td>
                                          <td>{$tp.det_bien}</td>
                                          <td>{$tp.fec_bien}</td>
                                          <td>{$tp.can_bien}</td>
                                          <td>{$tp.val_bien}</td>
                                          <td>{$tp.est_bien}</td>
                                          <td>{$tp.nom_user}</td>
                                          <td><button type='button' id="editar"class='editar btn btn-primary'><i class="material-icons" title="editar">create </i></button>
                                              <button type='button' id="prestar"class='prestar btn btn-danger'><i class="material-icons" title="prestar">pan_tool </i></button>
                                           <button type='button' id=""class='detalle btn bg-orange'href="?view=detalleBP" ><i class="material-icons" title="detalle">receipt</i></button>

                                          </td>

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


  </div>
  <div class="row"  id="ter">
    <section class="content">
    <div class="container-fluid">


        <div class="row clearfix">
          <center>
              <h3>PRESTAR UN BIEN A UNA OFICINA</h3>
            </center>

            <!-- Spinners -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <h2>   PRESTAR A:  </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                              <p>
                                  <b>OFICINA:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="oficinap"class="oficinap form-control " placeholder="OFICINA">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>EMTREGADO A:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="entregoap"class="entregoap form-control " placeholder="ENTREGADO A:">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>CARGO:</b>
                              </p>
                              <div class="input-group">

                                  <select name='cargop' id='cargop' class="cargop form-control show-tick"  >
                                      <option value='0'>CARGO</option>
                                      <option   value='NOMBRADO'>NOMBRADO</option>
                                      <option   value='CONTRATADO'>CONTRATADO</option>
                                      <option   value='OTRO'>OTRO</option>


                                  </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>FECHA:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="fechap"class="fechap form-control " placeholder="FECHA">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Spinners -->
            <!-- Tags Input -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>  CARGO:    </h2>

                    </div>
                    <div class="body">
                      <div class="row clearfix">
                          <div class="col-md-6">
                            <p>
                                <b>ID:</b>
                            </p>
                              <div class="input-group">

                                  <div class="form-line">

                                      <input type="text" id="idp"class="idp form-control " placeholder="OFICINA" disabled="">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <p>
                                <b>CODIGO:</b>
                            </p>
                              <div class="input-group">

                                  <div class="form-line">

                                      <input type="text" id="codigop"class="codigop form-control " placeholder="ENTREGADO A:" disabled="">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <p>
                                <b>ESTADO:</b>
                            </p>
                            <div class="input-group">

                                <select name='estadop' id='estadop' class="estadop form-control show-tick"  >
                                    <option value='0'>ESTADO</option>
                                    <option   value='ENTREGADO'>ENTREGADO</option>



                                </select>
                            </div>
                          </div>

                      </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tags Input -->

=======


                    <div class="card" >




                        <div class="">

                            <div class="body">
                               <table id="dt_bien" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CODIGO</th>
                                            <th>TIPO</th>
                                            <th>DETALLE</th>
                                            <th>FECHA</th>
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
                                          <td >{$tp.id_bien }</td>
                                          <td>{$tp.cod_bien}</td>
                                          <td>{$tp.tip_bien}</td>
                                          <td>{$tp.det_bien}</td>
                                          <td>{$tp.fec_bien}</td>
                                          <td>{$tp.can_bien}</td>
                                          <td>{$tp.val_bien}</td>
                                          <td>{$tp.est_bien}</td>
                                          <td>{$tp.nom_user}</td>
                                          <td><button type='button' id="editar"class='editar btn btn-primary'><i class="material-icons" title="editar">create </i></button>
                                              <button type='button' id="prestar"class='prestar btn btn-danger'><i class="material-icons" title="prestar">pan_tool </i></button>
                                           <button type='button' id="detalle"class='detalle btn bg-orange'><i class="material-icons" title="detalle">receipt</i></button>
                                          </td>

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


  </div>
  <div class="row"  id="ter">
    <section class="content">
    <div class="container-fluid">


        <div class="row clearfix">

            <!-- Spinners -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div id="_AJAX_">

              </div>
                <div class="card">
                    <div class="header">
                        <h2>   PRESTAR A:  </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6">
                              <p>
                                  <b>OFICINA:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="oficinap"class="oficinap form-control " placeholder="OFICINA">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>EMTREGADO A:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="entregoap"class="entregoap form-control " placeholder="ENTREGADO A:">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>CARGO:</b>
                              </p>
                              <div class="input-group">

                                  <select name='cargop' id='cargop' class="cargop form-control show-tick"  >
                                      <option value='0'>CARGO</option>
                                      <option   value='NOMBRADO'>NOMBRADO</option>
                                      <option   value='CONTRATADO'>CONTRATADO</option>
                                      <option   value='OTRO'>OTRO</option>


                                  </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>FECHA:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="fechap"class="fechap form-control " placeholder="FECHA">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Spinners -->
            <!-- Tags Input -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>  CARGO:    </h2>

                    </div>
                    <div class="body">
                      <div class="row clearfix">
                          <div class="col-md-6">
                            <p>
                                <b>ID:</b>
                            </p>
                              <div class="input-group">

                                  <div class="form-line">

                                      <input type="text" id="idp"class="idp form-control " placeholder="OFICINA" disabled="">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <p>
                                <b>CODIGO:</b>
                            </p>
                              <div class="input-group">

                                  <div class="form-line">

                                      <input type="text" id="codigop"class="codigop form-control " placeholder="ENTREGADO A:" disabled="">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <p>
                                <b>ESTADO:</b>
                            </p>
                            <div class="input-group">

                                <select name='estadop' id='estadop' class="estadop form-control show-tick"  >
                                    <option value='0'>ESTADO</option>
                                    <option   value='ENTREGADO'>ENTREGADO</option>



                                </select>
                            </div>
                          </div>

                      </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tags Input -->

>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
            <div class="col-md-12">
              <div class="row clearfix demo-button-sizes">
                                              <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                              </div>
                                              <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                              </div>
                                              <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                                  <button type="button" id="entregap"class="btn bg-cyan btn-block btn-lg waves-effect">ENTREGAR</button>

                                              </div>
                                              <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                                  <button type="button" id="volverp"class="btn bg-cyan btn-block btn-lg waves-effect">VOLVER</button>
                                              </div>
                                              <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                              </div>
                                              <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                              </div>
                                          </div>

            </div>
        </div>


    </div>
   </section>
  </div>



  {include 'overall/js_footer.tpl'}


	<script>
		$(document).on("ready", function(){
      $('#fechap').bootstrapMaterialDatePicker
                ({
                  format: 'DD/MM/YYYY HH:mm',
                  lang: 'es_PE',
                  weekStart: 1,
                  cancelText : 'ANNULER',
                  nowButton : true,
                  switchOnClick : true
                });

      $("#ter").slideUp("slow");
      $("#pri").slideUp("slow");
      $("#se").slideDown("slow");
      edid();

		});
    var edid =function(){
               $(".detalle").on("click",function(){

                 var valores0=$(this).parents("tr").find("td").eq(0).text();

<<<<<<< HEAD

=======
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
                 location.href= '?view=detalleBP&type='+valores0;


               });
               $("#volverp").on("click",function(){
                 $("#se").slideDown("slow");
                 $("#pri").slideUp("slow");
                 $("#ter").slideUp("slow");

               });
               $("#entregap").on("click",function(){
                 var connect,form,result,oficina,entregado,cargo,fecha,id,codigo,estado;
                 oficina=document.getElementById('oficinap').value;
     						entrego=document.getElementById('entregoap').value;
                 cargo=document.getElementById('cargop').value;
     						fecha=document.getElementById('fechap').value;
                 id=document.getElementById('idp').value;
                 codigo=document.getElementById('codigop').value;
     						estado=document.getElementById('estadop').value;

                 form='oficina='+oficina+
     								 '&entrego='+entrego+
                      '&cargo='+cargo+
     								 '&fecha='+fecha+
     								 '&id='+id+
     								 '&codigo='+codigo+
     								 '&estado='+estado;
                     // alert(form);
               if (error2()!=false) {

                 connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
                 connect.onreadystatechange =function(){
                  if (connect.readyState==4&&connect.status==200) {
                    swal({
                           title: "SEGURO QUE DESEA PRESTAR?",

                           type: "warning",
                           showCancelButton: true,
                           confirmButtonColor: "#cb0b1c",
                           confirmButtonText: "Si,Prestar!",
                           closeOnConfirm: false
                         },
                         function(){
                          // alert(connect.responseText);
                         var men=connect.responseText;
                           if (men==1) {
                             swal("PRESTANDO!", "prestamo exitosa", "success");
                             result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';


                             document.getElementById('_AJAX_').innerHTML=result;
                             location.href= '?view=listaB';
                           } else {
                               swal("NO ES POSIBLE EL PRESTAMO", "EL BIEN YA ESTA PRESTADO A UNA OFICINA", "error");

                           }


                         });



                  } else if(connect.readyState!=4){
                    swal("PROCESANDO!")
                  }
                }


                 connect.open('POST','?view=prestarB',true);
     						connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     						connect.send(form);

               }
               });

               $(".editar").on("click",function(){
                         var valores0=$(this).parents("tr").find("td").eq(0).text();
                         var valores1=$(this).parents("tr").find("td").eq(1).text();
                         var valores2=$(this).parents("tr").find("td").eq(2).text();
                         var valores3=$(this).parents("tr").find("td").eq(3).text();
                         var valores4=$(this).parents("tr").find("td").eq(4).text();
                         var valores5=$(this).parents("tr").find("td").eq(5).text();
                         var valores6=$(this).parents("tr").find("td").eq(6).text();
                         var valores7=$(this).parents("tr").find("td").eq(7).text();
                         var valores8=$(this).parents("tr").find("td").eq(8).text();
                         var id= $("#id").val(valores0);
                         var codigo= $("#codigo").val(valores1);
                         $("#tipo").val(valores2);$("#tipo").change();
                         var descripcion=$("#descripcion").val(valores3);
                         var fecha=$("#date-fr").val(valores4);
                         var cantidad=$("#cantidad").val(valores5);
                         var precio=$("#precio").val(valores6);
                         $("#estado").val(valores7);$("#estado").change();
                         var regis=$("#regis").val(valores8);
                         $("#pri").slideDown("slow");
 						            $("#se").slideUp("slow");

               });
               $(".prestar").on("click",function(){

                 var valores0=$(this).parents("tr").find("td").eq(0).text();
                 var valores1=$(this).parents("tr").find("td").eq(1).text();
                 var valores2=$(this).parents("tr").find("td").eq(2).text();
                 var valores3=$(this).parents("tr").find("td").eq(3).text();
                 var valores4=$(this).parents("tr").find("td").eq(4).text();
                 var valores5=$(this).parents("tr").find("td").eq(5).text();
                 var valores6=$(this).parents("tr").find("td").eq(6).text();
                 var valores7=$(this).parents("tr").find("td").eq(7).text();
                 var valores8=$(this).parents("tr").find("td").eq(8).text();
                 var id= $("#idp").val(valores0);
                 var codigo= $("#codigop").val(valores1);
                 if (valores7=='OBSOLETO') {
                   sweetAlert("Oops...", "NO SE PUEDE PRESTAR ESTE BIEN,POR QUE ESTA  "+valores7, "error");
                   return false;

                 }
                 $("#ter").slideDown("slow");
                 $("#se").slideUp("slow");


               });
               $("#guardar_e").on("click",function(){
                 var connect,form,result,id,codigo,tipo,detalle,fecha,cantidad,valor,estado,registrador;
                 id=document.getElementById('id').value;
     						codigo=document.getElementById('codigo').value;
     						tipo=document.getElementById('tipo').value;
     						detalle=document.getElementById('descripcion').value;
     						fecha=document.getElementById('date-fr').value;
     						cantidad=document.getElementById('cantidad').value;
     						valor=document.getElementById('precio').value;
     						estado=document.getElementById('estado').value;
                 registrador=document.getElementById('regis').value;
                 form='id='+id+
                      '&codigo='+codigo+
     								 '&tipo='+tipo+
     								 '&detalle='+detalle+
     								 '&fecha='+fecha+
     								 '&cantidad='+cantidad+
     								 '&valor='+valor+
     								 '&estado='+estado+
     								 '&registrador='+registrador;

               //  alert(form);
                connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
                 if (error()!=false) {
                   swal({
                           title: "seguro que desea editar!",
                           type: "warning",
                           showCancelButton: true,
                           confirmButtonColor: "#DD6B55",
                           confirmButtonText: "Si, editar!",
                           closeOnConfirm: false
                         },
                         function(){


                           connect.onreadystatechange =function(){
                            if (connect.readyState==4&&connect.status==200) {
                               //alert(connect.responseText);
                              if (parseInt(connect.responseText) ==1) {


                                      swal("CORECTO", "se edito correctamente.", "success");
                                      location.href= '?view=listaB';


                              } else if(parseInt(connect.responseText)==2){
                                swal("ERROR", "consulta erronea", "error");

                              }

                            } else if(connect.readyState!=4){
                              swal("CONECTANDO...", "..", "success");
                            }
                          }

                          connect.open('POST','?view=EdidBien',true);
                          connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                          connect.send(form);


                         });

                 }



               });
               $("#listar_e").on("click",function(){
                 $("#se").slideDown("slow");
                 $("#pri").slideUp("slow");

               });


             }
             var error=function(){
               var numeros=/^[0-9]*$/;
               var precio=/^[0-9]$/;
               var telefono=/^\d{9}$/;
               var letras=/^[a-zA-Z]+\s?[a-zA-Z]*$/;
               var apellidos=/^[a-zA-Z]+\s+[a-zA-Z]*$/;
               $(".error").fadeOut().remove();
               var indice = document.getElementById("tipo").selectedIndex;
               var indice2 = document.getElementById("estado").selectedIndex;
               if( indice == null || indice == 0 ) {
                 $(".tipo").focus().after('<span class="error">TIPO DE BIEN</span>');
                  return false;
               }

                  if ($(".descripcion").val() == "" ) {
                 $(".descripcion").focus().after('<span class="error">DESCRIPCIÓN</span>');
                   return false;
                }
                if ($(".fecha").val() == "" ) {
                $(".fecha").focus().after('<span class="error">FECHA</span>');
                  return false;
               }
               if ($(".cantidad").val() == ""|| !numeros.test($(".cantidad").val()))  {
              $(".cantidad").focus().after('<span class="error">CANTIDAD SOLO NUMEROS</span>');
                return false;
              }

              if ($(".precioo").val() == ""|| !/^[0-9]*[.][0-9][0-9]$/.test($(".precioo").val()))  {
             $(".precioo").focus().after('<span class="error">PRECIO ej:234.05 </span>');
               return false;
             }
             if( indice2 == null || indice2 == 0 ) {
               $(".estado").focus().after('<span class="error">ESTADO</span>');
                return false;
             }

             }
             var error2=function(){

               $(".error").fadeOut().remove();

               var indice2 = document.getElementById("cargop").selectedIndex;
               var indice3 = document.getElementById("estadop").selectedIndex;


                  if ($(".oficinap").val() == "" ) {
                 $(".oficinap").focus().after('<span class="error"> OFICINA</span>');
                   return false;
                }
                if ($(".entregoap").val() == "" ) {
                $(".entregoap").focus().after('<span class="error">ENTREGA A:?</span>');
                  return false;
               }
               if( indice2 == null || indice2 == 0 ) {
                 $(".cargop").focus().after('<span class="error"> CARGO</span>');
                  return false;
               }
               if ($(".fechap").val() == "")  {
              $(".fechap").focus().after('<span class="error">FECHA</span>');
                return false;
              }
              if( indice3 == null || indice3 == 0 ) {
                $(".estadop").focus().after('<span class="error">ESTADO</span>');
                 return false;
              }


             }




	</script>
  <script type="text/javascript">
           $(function () {
               $('.js-basic-example').DataTable();

               //Exportable table
               $('.js-exportable').DataTable({
                   dom: 'Bfrtip',
                   language:idioma_espanol,
                   buttons: [	{
                       "text":"<i class='fa fa-user-plus'></i>",
                       "titleAttr":"listaBIENES",
                       "action":function()
                       {
                       //	agregar_nuevo_usuario();
                        location.href= '?view=listaB';
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

  <script src="styles/js/auto-complete.js"></script>
 <script type="text/javascript">
 var demo1 = new autoComplete({
                selector: '#oficinap',
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = [
'OFICINA DE SECRETARIA GENERAL',
'OFICINA DE COOPERACION TECNICA',
'OFICINA DE IMAGEN INSTITUCIONAL',
'OFICINA DE TECNOLOGIAS DE LA INFORMACION',
'OFICINA DE ASESORIA LEGAL',
'OFICINA DE PLANES Y PROGRAMAS',
'OFICINA DE ESTADISTICA',
'OFICINA DE RACIONALIZACION',
'OFICINA DE PRESUPUESTO',
'OFICINA DE UNIDAD FORMULADORA DE PROYECTOS(UF)',
'OFICINA DE PROGRAMACION DE INVESTIGACIONES',
'CENTRO DE IDIOMAS',
'CENTRO DE INFORMATICA ',
'CENTRO EXPERIMENTAL',
'CENTRO DE INDUSTRIAL ALIMENTARIAS',
'EMPRESAS UNIVERSITARIAS',
'CENTRO PRE UNIVERISTARIO',
'OFICINA DE BIENES PATRIMONIALES',
'OFICINA DE ABASTECIMIETOS',
'OFICINA DE TESORERIA',
'OFICINA DE CONTABILIDAD',
'OFICINA DE RECURSOS HUMANOS',
'OFICINA DE GESTION DE PROYECTOS',
'OFICINA DE ESTUDIOS Y PROYECTOS',
'OFICINA DE OBRAS Y SUPERVISION',
'OFICINA DE MANTENIMIENTO Y OPERACION',
'OFICINA DE SERVICIO SOCIAL',
'OFICINA DE CENTRO UNIVERSIDAD SALUDABLE',
'OFICINA DE COMEDOR UNIVERSITARIO',
'OFICINA DE REGISTRO ACADEMICO',
'OFICINA TUTORIA UNIVERSITARIA',
'OFICINA BIBLIOTECA CENTRAL',
'OFICINA EDITORIAL Y BIBLERIA',
'OFICINA DE EVALUACION DE DESEMPLEÑO ACADEMICO',
'OFICINA DE CAPACITACION Y COMPLEMETACION PEDAGOGICA',
'OFICINA SEGUIMIENTO Y EVALUACION DE PERFILES ACADEMICO PROFESIONALES',
'OFICINA DE ANALISIS Y EVALUACION DE INDICADORES',
'OFICINA DE NORMALIZACION ACADEMICA',
'OFICINA CENTRO DE INTITUTO DE INVESTIGACION',
'OFICINA DE PROGRAMACION Y EVALUACION CIENTIFICA DE FACULTADES',
'OFICINA DE PROPIEDAD INTELECTUAL Y GESTION DE INTANGIBLES',
'OFICINA DE PARGUE CIENTIFICO TECNOLOGICO',
'OFICINA DE EVENTOS CIENTIFICOS Y CULTURALES',
'OFICINA DE ASESORAMIENTO TECNICO',
'OFICINA DE PERMANENTE DE ADMISION'          ];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });



 </script>
</body>
</html>
