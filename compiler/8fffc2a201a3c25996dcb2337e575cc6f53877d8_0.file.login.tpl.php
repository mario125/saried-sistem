<?php /* Smarty version 3.1.27, created on 2017-02-13 09:23:17
         compiled from "C:\xampp\htdocs\proyectoSari\styles\templates\public\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1672258a16cf59b72a9_28873949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fffc2a201a3c25996dcb2337e575cc6f53877d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoSari\\styles\\templates\\public\\login.tpl',
      1 => 1486974190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672258a16cf59b72a9_28873949',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a16cf5bbb4f0_78377198',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a16cf5bbb4f0_78377198')) {
function content_58a16cf5bbb4f0_78377198 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1672258a16cf59b72a9_28873949';
echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



   <?php if (isset($_SESSION['id_user'])) {?>
   <body class="four-zero-four">
       <div class="four-zero-four-container">
           <div class="error-code">;)</div>
           <br>
           <div class="error-message">Estas Logueado</div>
           <br>
           <div class="button-place">
             <button type="button" id="panel"class="btn btn-warning waves-effect">IR A PANEL DE CONTROL</button>

           </div>
       </div>
   <?php } else { ?>
   <body class="signup-page ls-closed gb-colo">
     <?php echo $_smarty_tpl->getSubTemplate ('overall/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   <?php }?>


    <?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript">
window.onload=function(){
  document.getElementById('btn').onclick=function(){
    var connect,user,pass,session,form,result;
      user=document.getElementById('user').value;
      pass=document.getElementById('pass').value;

      form='user='+user+'&pass='+pass;

      connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
      if (user!=''&&pass!='') {
        connect.onreadystatechange =function(){
          if (connect.readyState==4&&connect.status==200) {
            alert(connect.responseText);
            if (parseInt(connect.responseText) ==1) {
                    result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';
                    location.href= '?view=admin';
                    document.getElementById('_AJAX_').innerHTML=result;


            } else if(parseInt(connect.responseText)==0){
              result='<div class="alert bg-teal alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CUENTA BLOQUEADA ..!</div>';
              document.getElementById('_AJAX_').innerHTML=result;

            }else {
              result='<div class="alert bg-pink alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>ERROR DE CUENTA . . !</div>';
              document.getElementById('_AJAX_').innerHTML=result;
            }

          } else if(connect.readyState!=4){
            result='<div class="alert bg-green alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>PROCENSANDO--!</div>';
            document.getElementById('_AJAX_').innerHTML=result;
          }
        }
        connect.open('POST','?view=login',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
      } else {
        result='<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>FALTAN DATOS..! </div>';
        document.getElementById('_AJAX_').innerHTML=result;
      }




    }
  }
  document.getElementById('panel').onclick=function(){
  location.href= '?view=admin';
  }
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
?>