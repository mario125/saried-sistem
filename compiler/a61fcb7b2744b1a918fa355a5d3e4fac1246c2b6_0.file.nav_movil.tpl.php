<?php /* Smarty version 3.1.27, created on 2017-02-13 19:09:25
         compiled from "C:\xampp\htdocs\proyectoSari\styles\templates\overall\nav_movil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2156158a1f655e81af7_23420388%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a61fcb7b2744b1a918fa355a5d3e4fac1246c2b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoSari\\styles\\templates\\overall\\nav_movil.tpl',
      1 => 1487009364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2156158a1f655e81af7_23420388',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a1f655ecfa87_29675761',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a1f655ecfa87_29675761')) {
function content_58a1f655ecfa87_29675761 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2156158a1f655e81af7_23420388';
?>
<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="?view=admin">
                <i class="material-icons">home</i>
                <span>INICIO</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">map</i>
                <span>MANTENIMIENTO DE BIENES</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="?view=registrarBien">REGISTRAR BIEN</a>
                </li>
                <li>
                    <a href="?view=prestarBien">PRESTAR BIEN</a>
                </li>
                <li>
                    <a href="?view=devoBien">DEVOLUCIÓN DE UN BIEN</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="?view=registrarUser">
                <i class="material-icons">text_fields</i>
                <span>REGISTRAR NUEVO ADMIN</span>
            </a>
        </li>
        <li>
            <a href="?view=verUser">
                <i class="material-icons">text_fields</i>
                <span>VER ADMINISTRADORES</span>
            </a>
        </li>
        <li>
            <a href="?view=detalles">
                <i class="material-icons">layers</i>
                <span>DETALLES</span>
            </a>
        </li>


    </ul>
</div>
<?php }
}
?>