<?php /* Smarty version 3.1.27, created on 2017-02-08 13:06:29
         compiled from "C:\xampp\htdocs\proyectoSari\styles\templates\overall\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16045589b09c5dfda72_96512572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d40c3325c1bc035cc7c135b76d5b4ae546069ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoSari\\styles\\templates\\overall\\login.tpl',
      1 => 1486555586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16045589b09c5dfda72_96512572',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b09c5e3ed33_70262112',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b09c5e3ed33_70262112')) {
function content_589b09c5e3ed33_70262112 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16045589b09c5dfda72_96512572';
?>
<div class="signup-box">
    <div class="logo">
        <a href="javascript:void(0);">Admin<b>INVENTARIO</b></a>
        <small>UNAMBA-Abancay</small>
    </div>
    <div class="card">
        <div class="body">

                <div class="msg">Iniciar Sesión</div>
                <div id="_AJAX_">


                </div>


                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input class="form-control" id="user" name="namesurname" placeholder="usuario" required="" autofocus="" aria-required="true" type="text">
                    </div>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input class="form-control" id="pass" name="password" minlength="6" placeholder="password" required="" aria-required="true" type="password">
                    </div>
                </div>

              <br>
              <br>
              <br>


                <a id="btn" class="btn btn-block btn-lg bg-orange " >INICIAR</a>




        </div>
    </div>
</div>
<?php }
}
?>