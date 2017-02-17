<?php /* Smarty version 3.1.27, created on 2017-02-08 14:55:15
         compiled from "C:\xampp\htdocs\proyectoSari\styles\templates\home\error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7990589b23435456a7_62619454%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6615cbdcbada35ab1fdf01afb0a92e11b38c5c92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoSari\\styles\\templates\\home\\error.tpl',
      1 => 1486548176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7990589b23435456a7_62619454',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589b234359d619_18533173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589b234359d619_18533173')) {
function content_589b234359d619_18533173 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7990589b23435456a7_62619454';
echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body class="four-zero-four">
    <div class="four-zero-four-container">
        <div class="error-code">404</div>
        <div class="error-message">This page doesn't exist</div>
        <div class="button-place">
            <a href="../proyectoSari/index.php" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



</body>

</html>
<?php }
}
?>