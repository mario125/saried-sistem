<?php /* Smarty version 3.1.27, created on 2017-03-24 13:19:53
         compiled from "C:\xampp\htdocs\SARI\styles\templates\overall\info_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175626127058d50ee9d97078_44689026%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8d32148dc5cab006c60c2416ebd85509c7d29b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\overall\\info_user.tpl',
      1 => 1490357968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175626127058d50ee9d97078_44689026',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d50ee9dfb323_88075006',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d50ee9dfb323_88075006')) {
function content_58d50ee9dfb323_88075006 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175626127058d50ee9d97078_44689026';
?>
<div class="user-info">
    <div class="image">
        <img src="<?php echo $_SESSION['fot_user'];?>
" width="60" height="60" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nom_user'];?>
</div>
        <div class="email"><?php echo $_SESSION['ape_user'];?>
</div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right " >

                <li role="seperator" class="divider"></li>
                <li><a href="?view=regisB"><i class="material-icons">create</i>Registrar bien</a></li>
                

                <li><a href="?view=registrarUser"><i class="material-icons">person_add</i>Registrar admin</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="?view=salir" ><i class="material-icons">lock</i>Salir</a></li>
            </ul>
        </div>
    </div>
</div>
<?php }
}
?>