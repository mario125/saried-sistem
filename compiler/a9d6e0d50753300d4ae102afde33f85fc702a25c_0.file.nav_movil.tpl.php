<?php /* Smarty version 3.1.27, created on 2017-02-20 05:16:51
         compiled from "C:\xampp\htdocs\SARI\styles\templates\overall\nav_movil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18050269358aa6db3695516_52939116%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d6e0d50753300d4ae102afde33f85fc702a25c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\overall\\nav_movil.tpl',
      1 => 1487563041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18050269358aa6db3695516_52939116',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58aa6db36da2a1_47236185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58aa6db36da2a1_47236185')) {
function content_58aa6db36da2a1_47236185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18050269358aa6db3695516_52939116';
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
                  <a href="?view=listaB">LISTAR BIENES</a>
              </li>
                <li>
                    <a href="?view=regisB">REGISTRAR BIEN</a>
                </li>
                <li>
                    <a href="?view=prestarB">PRESTAR BIEN</a>
                </li>
                <li>
                    <a href="?view=devolverB">DEVOLUCIÓN DE UN BIEN</a>
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