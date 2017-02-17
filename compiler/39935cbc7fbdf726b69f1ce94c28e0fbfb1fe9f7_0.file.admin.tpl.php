<?php /* Smarty version 3.1.27, created on 2017-02-06 15:24:26
         compiled from "C:\xampp\htdocs\saried\pro\styles\templates\public\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:182375898871a9e5715_58274489%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39935cbc7fbdf726b69f1ce94c28e0fbfb1fe9f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saried\\pro\\styles\\templates\\public\\admin.tpl',
      1 => 1485324995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182375898871a9e5715_58274489',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5898871aa36380_10828680',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5898871aa36380_10828680')) {
function content_5898871aa36380_10828680 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182375898871a9e5715_58274489';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container" style="margin-top: 100px;">
      <div class="jumbotron">
        <h1>Bienvenido admin</h1>
        




      </div>
    </div>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  </body>
</html>
<?php }
}
?>