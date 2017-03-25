<?php /* Smarty version 3.1.27, created on 2017-03-24 11:23:42
         compiled from "C:\xampp\htdocs\SARI\styles\templates\overall\nav_movil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85591650458d4f3ae72f4f8_87038541%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d6e0d50753300d4ae102afde33f85fc702a25c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\overall\\nav_movil.tpl',
      1 => 1490350988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85591650458d4f3ae72f4f8_87038541',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d4f3ae730ab9_66704010',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d4f3ae730ab9_66704010')) {
function content_58d4f3ae730ab9_66704010 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '85591650458d4f3ae72f4f8_87038541';
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
                  <a href="?view=listaBP">LISTAR BIENES PRESTADOS</a>
              </li>
                <li>
                    <a href="?view=regisB">REGISTRAR BIEN</a>
                </li>
              
                <li>
                    <a href="?view=devolBien">DEVOLUCIÓN DE UN BIEN</a>
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



    </ul>
</div>
<?php }
}
?>