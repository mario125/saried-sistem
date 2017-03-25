<?php /* Smarty version 3.1.27, created on 2017-03-24 13:23:52
         compiled from "C:\xampp\htdocs\SARI\styles\templates\home\error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115881660358d50fd8633841_61334187%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ab313b5c88007d7e70c7f1e81112bdb212d35a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\home\\error.tpl',
      1 => 1490358227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115881660358d50fd8633841_61334187',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d50fd86765b7_69495552',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d50fd86765b7_69495552')) {
function content_58d50fd86765b7_69495552 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115881660358d50fd8633841_61334187';
echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body class="four-zero-four">
    <div class="four-zero-four-container">
        <div class="error-code">404</div>
        <div class="error-message">This page doesn't exist</div>
        <div class="button-place">
            <a href="index.php" class="btn btn-default btn-lg waves-effect">IR A LOGIN</a>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



</body>

</html>
<?php }
}
?>