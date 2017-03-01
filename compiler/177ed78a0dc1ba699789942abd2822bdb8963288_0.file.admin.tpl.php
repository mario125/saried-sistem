<?php /* Smarty version 3.1.27, created on 2017-02-17 21:48:09
         compiled from "C:\xampp\htdocs\SARI\styles\templates\public\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194367151558a76189b87d75_35334852%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177ed78a0dc1ba699789942abd2822bdb8963288' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\public\\admin.tpl',
      1 => 1486560445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194367151558a76189b87d75_35334852',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a76189c6a115_49012848',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a76189c6a115_49012848')) {
function content_58a76189c6a115_49012848 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194367151558a76189b87d75_35334852';
?>
    <?php echo $_smarty_tpl->getSubTemplate ('overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="theme-red">
    <!-- Page Loader -->
    <?php echo $_smarty_tpl->getSubTemplate ('overall/load.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <?php echo $_smarty_tpl->getSubTemplate ('overall/buscar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php echo $_smarty_tpl->getSubTemplate ('overall/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <?php echo $_smarty_tpl->getSubTemplate ('overall/info_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <!-- #User Info -->
            <!-- Menu -->
            <?php echo $_smarty_tpl->getSubTemplate ('overall/nav_movil.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <!-- #Menu -->
            <!-- Footer -->

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
         <?php echo $_smarty_tpl->getSubTemplate ('overall/theme.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BLANK PAGE</h2>
            </div>
        </div>
    </section>

    <?php echo $_smarty_tpl->getSubTemplate ('overall/js_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>

</html>
<?php }
}
?>