<?php /* Smarty version 3.1.27, created on 2017-02-17 21:48:09
         compiled from "C:\xampp\htdocs\SARI\styles\templates\overall\load.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:41442133058a76189df0081_41199221%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '020dad0d4ea30e4c718e78915dd13e94adf1d356' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\overall\\load.tpl',
      1 => 1486542605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41442133058a76189df0081_41199221',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a76189e00990_08955857',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a76189e00990_08955857')) {
function content_58a76189e00990_08955857 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '41442133058a76189df0081_41199221';
?>
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<?php }
}
?>