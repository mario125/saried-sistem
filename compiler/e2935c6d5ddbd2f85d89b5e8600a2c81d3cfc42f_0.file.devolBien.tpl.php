<?php /* Smarty version 3.1.27, created on 2017-03-31 23:56:26
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\devolBien.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:77737998858ded08ac27fd6_98688277%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2935c6d5ddbd2f85d89b5e8600a2c81d3cfc42f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\devolBien.tpl',
      1 => 1490997384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77737998858ded08ac27fd6_98688277',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ded08ac7dc95_79223688',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ded08ac7dc95_79223688')) {
function content_58ded08ac7dc95_79223688 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '77737998858ded08ac27fd6_98688277';
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

      <!-- #END# Right Sidebar -->
  </section>


          <div id="cuadro3" class=" row">
            <section class="content">
        <div class="container-fluid">
          <center>
              <h3>DEVOLVER  BIEN <h2 style="color:red;"> <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h2></h3>
            </center>


            <div class="row clearfix">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>  CARGO:    </h2>

                      </div>
                      <div class="body">
                        <div class="row clearfix">

                              <input type="text" id="id"class="id form-control " placeholder="OFICINA" style="display:none">

                            <div class="col-md-6">
                              <p>
                                  <b>CODIGO:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="codigo"class="codigo form-control " onkeyup="autocompletar()" autocomplete="off" >

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>OFICINA:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="oficina"class="oficina form-control " placeholder="OFICINA" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>PRESTADO POR:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="prestador"class="prestador form-control " placeholder="RESPONSABLE" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>PRESTADO A:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="prestadoa"class="prestadoa form-control " placeholder="PRESTADO A :" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>FUNCIÓN:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="funcion1"class="funcion1 form-control " placeholder="FUNCIÓN" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>FECHA:</b>
                              </p>
                                <div class="input-group">

                                    <div class="form-line">

                                        <input type="text" id="fecha"class="fecha form-control " placeholder="FECHA" disabled="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <p>
                                  <b>ESTADO DEL BIEN:</b>
                              </p>
                              <div class="input-group">

                                  <select name='estado' id='estado' class="estado form-control show-tick"  >
                                    <option value="0">ESTADO</option>
                                    <option value='OPERATIVO'>OPERATIVO</option>

                                    <option value='OBSOLETO'>OBSOLETO</option>




                                  </select>
                              </div>
                            </div>



                        </div>
                      </div>
                  </div>
              </div>
              <!-- #END# Tags Input -->

                <!-- Spinners -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div id="_AJAX_">

                  </div>
                    <div class="card">
                        <div class="header">
                            <h2>   ENTREGADO POR:  </h2>

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                  <p>
                                      <b>RESEPCIONA :</b>
                                  </p>
                                    <div class="input-group">

                                        <div class="form-line">

                                            <input type="text" id="resepciona"class="resepciona form-control " placeholder="" value="<?php echo $_SESSION['nom_user'];?>
 <?php echo $_SESSION['ape_user'];?>
">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <p>
                                      <b>EMTREGADO POR:</b>
                                  </p>
                                    <div class="input-group">

                                        <div class="form-line">

                                            <input type="text" id="entregadopor"class="entregadopor form-control " placeholder="ENTREGADO POR:">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <p>
                                      <b>CARGO:</b>
                                  </p>
                                  <div class="input-group">

                                      <select name='cargo' id='cargo' class="cargo form-control show-tick"  >
                                          <option   value='0'>cargo</option>
                                          <option   value='CONTRATADO'>CONTRATADO</option>
                                          <option   value='NOMBRADO'>NOMBRADO</option>
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


                <div class="col-md-12">
                  <div class="row clearfix demo-button-sizes">
                                                  <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                                  </div>
                                                  <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">

                                                  </div>
                                                  <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                                      <button type="button" id="guardar"class="btn bg-cyan btn-block btn-lg waves-effect">GUARDAR</button>

                                                  </div>
                                                  <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                                      <button type="button" id="volver"class="btn bg-cyan btn-block btn-lg waves-effect">CANCELAR</button>
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





<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/sc.js"><?php echo '</script'; ?>
>




<?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript">

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

                  guardar();
                 });
                 var guardar = function()
                 {
                   $("#guardar").on("click",function(){
                     var connect,form,result,id,codigo,oficina,estado,resepciona,entregadopor,cargo,fecha,nombre;
                     id=document.getElementById('id').value;
                    codigo=document.getElementById('codigo').value;
                    estado=document.getElementById('estado').value;
                    resepciona=document.getElementById('resepciona').value;
                    entregadopor=document.getElementById('entregadopor').value;
                    cargo=document.getElementById('cargo').value;
                    fecha=document.getElementById('fechap').value;
                    nombre='devolver';

                     if (error()==true ) {


                       if (id!=''){


                                                form='id='+id+
                                                     '&codigo='+codigo+
                                    								 '&estado='+estado+
                                    								 '&resepciona='+resepciona+
                                    								 '&entregadopor='+entregadopor+
                                    								 '&cargo='+cargo+
                                    								 '&fecha='+fecha+
                                                    '&nombre='+nombre;

                                             //  alert(form);
                                               connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
                                               swal({
                                                       title: "seguro que desea devolver!",
                                                       type: "warning",
                                                       showCancelButton: true,
                                                       confirmButtonColor: "#DD6B55",
                                                       confirmButtonText: "Si!",
                                                       closeOnConfirm: false
                                                     },
                                                     function(){


                                                       connect.onreadystatechange =function(){
                                                        if (connect.readyState==4&&connect.status==200) {
                                                           //alert(connect.responseText);
                                                          if (parseInt(connect.responseText) ==1) {


                                                                    swal("CORECTO", "DEVOLUCION EXITOSA..", "success");
                                                                  location.href= '?view=devolBien';


                                                          } else if(parseInt(connect.responseText)==2){
                                                              swal("CONSULTA BLOQUEADA", "EL BIEN YA FUE DEVUELTO ANTERIORMENTE ", "error");

                                                          }

                                                        } else if(connect.readyState!=4){
                                                            swal("CONECTANDO..", "CONECTADO.", "success");
                                                        }
                                                      }

                                                      connect.open('POST','?view=devolBien',true);
                                                      connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                                      connect.send(form);


                                                     });

                       }
                       else {
                          swal("ERROR...", "BIEN NO ENCONTRADO", "error");

                          return false;
                       }




                     }

                   });

                 }
                 var error = function()
                 {
                   var nombres=/^[a-zA-Z]+\s+[a-zA-Z]+\s+[a-zA-Z]+\s?[a-zA-Z]*$/;
                     $(".error").fadeOut().remove();

                     var indice2 = document.getElementById("estado").selectedIndex;
                     var indice = document.getElementById("cargo").selectedIndex;
                     if ($(".codigo").val()=="") {
                       $(".codigo").focus().after('<span class="error">CODIGO</span>');
                         return false;
                     }
                     if( indice2 == null || indice2 == 0 ) {
                       $(".estado").focus().after('<span class="error">ESTADO </span>');
                        return false;
                     }
                     if ($(".entregadopor").val()==""||!nombres.test($(".entregadopor").val())) {
                       $(".entregadopor").focus().after('<span class="error">NOMBRES COMPLETOS</span>');
                         return false;
                     }
                     if( indice == null || indice == 0 ) {
                       $(".cargo").focus().after('<span class="error">CARGO</span>');
                        return false;
                     }
                     if ($(".fechap").val()=="") {
                       $(".fechap").focus().after('<span class="error">FECHA</span>');
                         return false;
                     }
                     return true;

                 }

<?php echo '</script'; ?>
>


</body>

</html>
<?php }
}
?>