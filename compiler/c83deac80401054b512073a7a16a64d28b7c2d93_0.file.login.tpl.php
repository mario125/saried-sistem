<?php /* Smarty version 3.1.27, created on 2017-03-25 02:59:58
         compiled from "C:\xampp\htdocs\SARI\styles\templates\overall\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183907300558d5cf1ed48e01_54459746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83deac80401054b512073a7a16a64d28b7c2d93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\overall\\login.tpl',
      1 => 1490399051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183907300558d5cf1ed48e01_54459746',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d5cf1eedc5f8_17721971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d5cf1eedc5f8_17721971')) {
function content_58d5cf1eedc5f8_17721971 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '183907300558d5cf1ed48e01_54459746';
?>
<div class="signup-box " >
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