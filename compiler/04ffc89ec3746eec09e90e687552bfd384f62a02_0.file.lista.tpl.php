<?php /* Smarty version 3.1.27, created on 2017-02-07 11:34:49
         compiled from "C:\xampp\htdocs\saried\pro\styles\templates\public\lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:202725899a2c969f510_71184563%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ffc89ec3746eec09e90e687552bfd384f62a02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saried\\pro\\styles\\templates\\public\\lista.tpl',
      1 => 1486463685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202725899a2c969f510_71184563',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5899a2c9720566_23291992',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5899a2c9720566_23291992')) {
function content_5899a2c9720566_23291992 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '202725899a2c969f510_71184563';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>

  <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <table class="bordered centered">
      <thead>
        <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>CONDICION</th>
            <th>TELEFONO</th>
            <th>DIRECCION</th>
            <th>ESTADO</th>
            <th>NIK</th>
            <th>PASSORD</th>

        </tr>
      </thead>

      <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->_loop = true;
$foreach_tp_Sav = $_smarty_tpl->tpl_vars['tp'];
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['id_user'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['dni_user'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['n_user'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['ap_user'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['con_user'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['tel_user'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['dir_user'];?>
</td>
             <?php if ($_smarty_tpl->tpl_vars['tp']->value['es_user'] == "1") {?>
              <td>ACTIVO</td>
             <?php } else { ?>
              <td>INACTIVO</td>

             <?php }?>

          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['user_nik'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['user_pass'];?>
</td>

          <td><a href="#!" class="btn waves-effect cyan">PERFIL</a></td>
          <td><input type="button" value="ok" id="ok" class="boton"></td>


        </tr>
        <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>

      </tbody>
    </table>
    <?php echo '<script'; ?>
>
    $(document).ready(function(){
        $(".boton").click(function(){

            var valores="";

            // Obtenemos todos los valores contenidos en los <td> de la fila
            // seleccionada
            $(this).parents("tr:eq(0)").find("td:eq(0)").each(function(){
                valores+=$(this).html()+"\n";
            });

            alert(valores);
        });
    });
    <?php echo '</script'; ?>
>


  <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  </body>
</html>
<?php }
}
?>