<?php /* Smarty version 3.1.27, created on 2017-02-08 02:27:36
         compiled from "C:\xampp\htdocs\saried\pro\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7342589a7408d436a5_20349589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da543b1c08481370067f62a96f1e3bb0448b7a11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saried\\pro\\styles\\templates\\home\\index.tpl',
      1 => 1486517252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7342589a7408d436a5_20349589',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589a7408da4a57_02630444',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589a7408da4a57_02630444')) {
function content_589a7408da4a57_02630444 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7342589a7408d436a5_20349589';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <form enctype="multipart/form-data" class="formulario">
        <label>Subir un archivo</label><br />
        <input name="archivo" type="file" id="imagen" /><br /><br />
        <input type="button" id="sub"value="Subir imagen" /><br />
  </form>



  <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <?php echo '<script'; ?>
>
  window.onload=function(){
    document.getElementById('sub').onclick=function(){



      var connect,form,result,fileName,fileType,nombres;
      var file = $("#imagen")[0].files[0];
      fileName = file.name;
      nombres="holas";
      fileType = file.type;



      form='fileName='+fileName
          +'&nombres='+nombres
          +'&fileType='+fileType;


        connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
     var n='m';
        if(n!='')
        {
          alert(" bien");
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

        connect.open('POST','?view=img',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
        }
        else
        {
          alert("Faltan");
        //  result='<div class="card-panel red white-text">ERROR.. Faltan datos !! </div>';
         // document.getElementById('_AJAX_').innerHTML=result;

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