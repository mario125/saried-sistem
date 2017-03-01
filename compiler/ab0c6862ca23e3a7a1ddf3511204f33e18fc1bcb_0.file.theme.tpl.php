<?php /* Smarty version 3.1.27, created on 2017-02-22 06:45:30
         compiled from "C:\xampp\htdocs\SARI\styles\templates\overall\theme.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143569110558ad257a26d161_26521484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0c6862ca23e3a7a1ddf3511204f33e18fc1bcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\overall\\theme.tpl',
      1 => 1487742186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143569110558ad257a26d161_26521484',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ad257a26e6a9_96691142',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ad257a26e6a9_96691142')) {
function content_58ad257a26e6a9_96691142 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143569110558ad257a26d161_26521484';
?>
<aside id="rightsidebar" class="right-sidebar">
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

</aside>
<?php }
}
?>