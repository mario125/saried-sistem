<?php /* Smarty version 3.1.27, created on 2017-02-19 10:29:29
         compiled from "C:\xampp\htdocs\SARI\styles\templates\home\error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12052142758a96579d1a7e7_58337103%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ab313b5c88007d7e70c7f1e81112bdb212d35a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\home\\error.tpl',
      1 => 1486548176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12052142758a96579d1a7e7_58337103',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a96579d74f08_30785248',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a96579d74f08_30785248')) {
function content_58a96579d74f08_30785248 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12052142758a96579d1a7e7_58337103';
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