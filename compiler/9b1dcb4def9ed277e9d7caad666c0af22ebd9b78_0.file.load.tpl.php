<?php /* Smarty version 3.1.27, created on 2017-02-08 09:30:57
         compiled from "C:\xampp\htdocs\proyectoSari\styles\templates\overall\load.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21315589ad741069ad7_13654748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1dcb4def9ed277e9d7caad666c0af22ebd9b78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoSari\\styles\\templates\\overall\\load.tpl',
      1 => 1486542605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21315589ad741069ad7_13654748',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589ad74106cfe7_90731212',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589ad74106cfe7_90731212')) {
function content_589ad74106cfe7_90731212 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21315589ad741069ad7_13654748';
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