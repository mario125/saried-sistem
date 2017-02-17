<?php /* Smarty version 3.1.27, created on 2017-02-06 16:38:33
         compiled from "C:\xampp\htdocs\saried\pro\styles\templates\public\registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2946058989879450473_24033102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec0417c914dab59ca17605faced753474fb2b5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saried\\pro\\styles\\templates\\public\\registro.tpl',
      1 => 1486395507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2946058989879450473_24033102',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589898794b2a14_67929051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589898794b2a14_67929051')) {
function content_589898794b2a14_67929051 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2946058989879450473_24033102';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <div class=" col S12">
<div class="row">
   <div class="col s12 col m8 push-m2  col l6 push-l3">
     <center>
        <h3>REGISTRAR</h3>
      </center>
     <div class="card-panel white z-depth-5">
       <div class="row">
     <div class="col s12">
       <div class="row">
         <div id="_AJAX_" class="input-field col s12">


          </div>

       </div>

       <div class="row">
         <div class="input-field col s6">
           <input  id="dni" type="text" class="validate">
           <label for="first_name">DNI</label>
         </div>

         <div class="input-field col s6">
           <input id="nombres" type="text" class="validate">
           <label for="last_name">NOMBRES</label>
         </div>
       </div>

       <div class="row">
         <div class="input-field col s6">
           <input  id="apellidos" type="text" class="validate">
           <label for="first_name">APELLIDOS</label>
         </div>

         <div class="input-field col s6 " >
                    <select class="icons" id="condicion">
                        <option value="0" disabled selected></option>
                        <option value="contratado"  class="circle">CONTRATADO</option>
                        <option value="nombrado"  class="circle">NOMBRADO</option>
                        <option value="otro"  class="circle">OTRO</option>

                    </select>
                    <label> CONDICIÓN</label>
          </div>
       </div>

       <div class="row">
         <div class="input-field col s6">
           <input  id="telefono" type="text" class="validate">
           <label for="first_name">TELEFONO</label>
         </div>

         <div class="input-field col s6">
           <input id="direccion" type="text" class="validate">
           <label for="last_name">DIRECCION</label>
         </div>
       </div>



       <div class="row">

         <div class="input-field col s6 " >
                    <select class="icons" id="estado">
                        <option value="0" disabled selected></option>
                        <option value="activo"  class="circle">ACTIVO</option>
                        <option value="inactivo"  class="circle">INACTIVO</option>

                    </select>
                    <label> ESTADO DE CUENTA</label>
          </div>

          <div class="input-field col s6">
            <input id="nick" type="text" class="validate">
            <label for="last_name">NICK</label>
          </div>

       </div>






       <div class="row">
         <div class="input-field col s6">
                    <input id="pass" type="text" class="validate" >
                    <label for="first-name">password</label>
          </div>

       </div>

       <div class="row">
         <div class="col s12">

               <button id="submitBtn" class="btn waves-effect waves-light" type="submit" name="action">REGISTRAR</button>
      </div>
     </div>




     </div>
   </div>


     </div>
   </div>
</div>
</div>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



  <?php echo '<script'; ?>
>
  window.onload=function(){
    document.getElementById('submitBtn').onclick=function(){
      var connect,dni,nombres,apellidos,condicion,telefono,direccion,estado,nik,pass,form,result;
        dni=document.getElementById('dni').value;
        nombres=document.getElementById('nombres').value;
        apellidos=document.getElementById('apellidos').value;
        condicion=document.getElementById('condicion').value;
        telefono=document.getElementById('telefono').value;
        direccion=document.getElementById('direccion').value;
        estado=document.getElementById('estado').value;
        nick=document.getElementById('nick').value;
        pass=document.getElementById('pass').value;

        form='dni='+dni
            +'&nombres='+nombres
            +'&apellidos='+apellidos
            +'&condicion='+condicion
            +'&telefono='+telefono
            +'&direccion='+direccion
            +'&estado='+estado
            +'&nick='+nick
            +'&pass='+pass;


        connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
       alert(dni+nombres+apellidos+condicion+telefono+direccion+estado+nick+pass);

        if(dni!=''&&nombres!=''&&apellidos!=''&&condicion!=0&&telefono!=''&&direccion!=''&&estado!=0&&nick!=''&&pass!='')
        {
            connect.onreadystatechange =function(){
            if(connect.readyState==4&&connect.status==200){
                alert(connect.responseText);
                if(parseInt(connect.responseText) ==1){

                    //conecatado con exito
                    //redireccione
                    result='<div class="card-panel blue white-text">REGISTRANDO..  !! </div>';
                    location.href= '?view=admin';
                    document.getElementById('_AJAX_').innerHTML=result;


                }else if (parseInt(connect.responseText)==2) {
                  result='<div class="card-panel red white-text">EL  NOMBRE Y APELLIDOS YA EXISTEN..  !! </div>';
                  document.getElementById('_AJAX_').innerHTML=result;

                }else if (parseInt(connect.responseText)==3) {
                  result='<div class="card-panel red white-text">AL USUARIO YA EXISTE..  !! </div>';
                  document.getElementById('_AJAX_').innerHTML=result;

                }else{
                   //    error
                   result='<div class="card-panel red white-text"> LOS DATOS  YA EXISTEN...!! </div>';
                   document.getElementById('_AJAX_').innerHTML=result;
                  }

            }else if(connect.readyState!=4){
                //procesando....
              result='<div class="card-panel amber white-text">PROCESANDO..  !! </div>';
               document.getElementById('_AJAX_').innerHTML=result;
              }
        }

        connect.open('POST','?view=registro',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
        }
        else
        {
          result='<div class="card-panel red white-text">ERROR.. Faltan datos !! </div>';
         document.getElementById('_AJAX_').innerHTML=result;

        }


    }
  }



  <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
?>