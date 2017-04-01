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
<<<<<<< HEAD

=======
    
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
      <!-- #END# Right Sidebar -->
  </section>

					<div class="row">
						<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
              <div class="container-fluid" style="margin-top:100px;">




                      <div class="card" >
<<<<<<< HEAD
                        <br>
                        <br>
                        <center>
                            <h3>LISTA DE BIENES PRESTADOS</h3>
                          </center>
=======
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac




                          <div class="">

                              <div class="body">
                                  <table id="dt_bien" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                      <thead>
                                          <tr>
<<<<<<< HEAD
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
=======
                                              <th>ID</th>
                                              <th>CODIGO</th>
                                              <th>OFICINA</th>
                                              <th>TIPO DE BIEN</th>
                                              <th>F.PRESTAMO</th>
                                              <th>F.DEVOLUCION</th>
                                              <th>ESTADO</th>
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
                                              </tr>
                                      </thead>

                                      <tfoot>
                                          <tr>
                                            <th>ID</th>
                                            <th>CODIGO</th>
<<<<<<< HEAD
                                            <th>COD.PATRIMONIO</th>
                                            <th>COD.INTERNO</th>
=======
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
                                            <th>OFICINA</th>
                                            <th>TIPO DE BIEN</th>
                                            <th>F.PRESTAMO</th>
                                            <th>F.DEVOLUCION</th>
                                            <th>ESTADO</th>
<<<<<<< HEAD
                                            <th>DEVOLVER</th>
=======
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac


                                          </tr>
                                      </tfoot>
                                      <tbody>

                                          {foreach from=$posts item=tp}
                                          <tr>
                                            <td >{$tp.id_cargo }</td>
                                            <td>{$tp.cod_bien}</td>
<<<<<<< HEAD
                                            <td>{$tp.cod_patrimonio}</td>
                                            <td>{$tp.cod_interno}</td>
=======
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
                                            <td>{$tp.ofi_cargo}</td>
                                            <td>{$tp.tip_bien}</td>
                                            <td>{$tp.fec_p_cargo}</td>
                                            <td>{$tp.fec_d_cargo}</td>
<<<<<<< HEAD
                                            <td><b>{$tp.est_cargo} </b> </td>
                                            {if $tp.est_cargo=='ENTREGADO'}
                                            <td><button type='button' id="devolver"class='devolver btn bg-orange'href="?view=detalleBP" ><i class="material-icons" title="devolver">receipt</i></button>
</td>
                                            {else}
                                            <td><b></b> </td>
                                            {/if}
=======
                                            <td>{$tp.est_cargo}</td>
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac


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






<<<<<<< HEAD




{include 'overall/js_footer.tpl'}


            <script type="text/javascript">
            $(".devolver").on("click",function(){
                      var valores0=$(this).parents("tr").find("td").eq(0).text();
                      var valores1=$(this).parents("tr").find("td").eq(1).text();

                    location.href= '?view=devolBien&id='+valores1;
                    

            });
=======
          <script src="styles/js/auto-complete.js"></script>
          <script>
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


{include 'overall/js_footer.tpl'}
          <script type='text/javascript'>


            $(document).ready(function(){
              $('#fechap').bootstrapMaterialDatePicker
                  ({
                    format: 'DD/MM/YYYY HH:mm',
                    lang: 'es_PE',
                    weekStart: 1,
                    cancelText : 'ANNULER',
                    nowButton : true,
                    switchOnClick : true
                  });

              $("#cuadro1").slideDown("slow");
					  	$("#cuadro2").slideUp("slow");
              $("#cuadro3").slideUp("slow");
              edid();





            });

            var edid =function(){
              $("#volverp").on("click",function(){
                $("#cuadro1").slideDown("slow");
                $("#cuadro2").slideUp("slow");
                $("#cuadro3").slideUp("slow");

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

                          type: "warning",NHJ
                          showCancelButton: true,
                          confirmButtonColor: "#DD6B55",
                          confirmButtonText: "Si,Prestar!",
                          closeOnConfirm: false
                        },
                        function(){
                        //  alert(connect.responseText);
                        var men=connect.responseText;
                          if (men==1) {
                            swal("PRESTANDO!", "prestamo exitosa", "success");
                            result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';


                            document.getElementById('_AJAX_').innerHTML=result;
                            location.href= '?view=listaB';
                          } else {
                              swal("NO ES POSI", "EL BIEN YA ESTA PRESTADO A UNA OFICINA", "error");

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
                        $("#cuadro2").slideDown("slow");
						            $("#cuadro1").slideUp("slow");

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
                $("#cuadro3").slideDown("slow");
                $("#cuadro1").slideUp("slow");


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
                          swal("CORECTO", "se edito correctamente.", "success");

                          connect.onreadystatechange =function(){
                           if (connect.readyState==4&&connect.status==200) {
                              //alert(connect.responseText);
                             if (parseInt(connect.responseText) ==1) {


                                     result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';

                                     document.getElementById('_AJAX_').innerHTML=result;
                                     location.href= '?view=listaB';


                             } else if(parseInt(connect.responseText)==2){
                               result='<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>OCURRIO UN PROBLEMA..! </div>';
                              document.getElementById('_AJAX_').innerHTML=result;

                             }

                           } else if(connect.readyState!=4){
                             result='<div class="alert bg-green alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>PROCENSANDO--!</div>';
                             document.getElementById('_AJAX_').innerHTML=result;
                           }
                         }

                         connect.open('POST','?view=EdidBien',true);
                         connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                         connect.send(form);


                        });

                }



              });
              $("#listar_e").on("click",function(){
                $("#cuadro1").slideDown("slow");
                $("#cuadro2").slideUp("slow");

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
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
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
<<<<<<< HEAD

=======
                         location.href= '?view=listaB';
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
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
