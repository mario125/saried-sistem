<?php /* Smarty version 3.1.27, created on 2017-02-07 11:08:29
         compiled from "C:\xampp\htdocs\saried\pro\styles\templates\overall\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1046658999c9db2f9f3_69867675%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8409d24aa252bf618be4757cea159a37a32a2d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saried\\pro\\styles\\templates\\overall\\footer.tpl',
      1 => 1486462016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1046658999c9db2f9f3_69867675',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58999c9db32f98_09343975',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58999c9db32f98_09343975')) {
function content_58999c9db32f98_09343975 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1046658999c9db2f9f3_69867675';
?>
<?php echo '<script'; ?>
 >
  window.onload=function(){
    $(".button-collapse").sideNav();
}

  <?php echo '</script'; ?>
>

   <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/materialize.min.js."><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/init.js"><?php echo '</script'; ?>
>
<?php }
}
?>