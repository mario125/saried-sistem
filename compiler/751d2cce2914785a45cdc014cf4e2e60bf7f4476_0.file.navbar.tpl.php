<?php /* Smarty version 3.1.27, created on 2017-03-24 12:50:21
         compiled from "C:\xampp\htdocs\SARI\styles\templates\overall\navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109384762258d507fd6a2733_23428575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751d2cce2914785a45cdc014cf4e2e60bf7f4476' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SARI\\styles\\templates\\overall\\navbar.tpl',
      1 => 1490356218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109384762258d507fd6a2733_23428575',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d507fd6de368_84564965',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d507fd6de368_84564965')) {
function content_58d507fd6de368_84564965 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109384762258d507fd6a2733_23428575';
?>
<nav class="navbar bg-indigo">
    <div class="container-fluid">
        <div class="navbar-header">

            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
                  <!-- Call Search -->

                  <!-- #END# Call Search -->
                  <!-- Notifications -->
                  <li class="dropdown">
                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                        BIENES  <i class="material-icons">local_grocery_store</i>
                          <span class="label-count"></span>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="header">BIENES </li>
                          <li class="body">
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 254px;"><ul class="menu" style="overflow: hidden; width: auto; height: 254px;">
                                  <li>
                                      <a  href="?view=listaB"  class=" waves-effect waves-block">
                                          <div class="icon-circle bg-light-green">
                                              <i class="material-icons">remove_from_queue</i>
                                          </div>
                                          <div class="menu-info">
                                              <h4>LISTAR BINES</h4>

                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="?view=listaBP" class=" waves-effect waves-block">
                                          <div class="icon-circle bg-cyan">
                                              <i class="material-icons">add_shopping_cart</i>
                                          </div>
                                          <div class="menu-info">
                                              <h4>LISTAR BIENES PRESTADOS</h4>

                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="?view=regisB"class=" waves-effect waves-block">
                                          <div class="icon-circle bg-red">
                                              <i class="material-icons">create</i>
                                          </div>
                                          <div class="menu-info">
                                              <h4>REGISTRAR BIEN</h4>

                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a   href="?view=devolBien"class=" waves-effect waves-block">
                                          <div class="icon-circle bg-orange">
                                              <i class="material-icons">business</i>
                                          </div>
                                          <div class="menu-info">
                                              <h4>DEVOLVER BIEN</h4>

                                          </div>
                                      </a>
                                  </li>

                              </ul>
                            </div>
                          </li>

                      </ul>
                  </li>
                  <!-- #END# Notifications -->
                  <!-- Tasks -->
                  <li class="dropdown">
                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                          USUARIOS<i class="material-icons">person_add</i>

                      </a>
                      <ul class="dropdown-menu">
                          <li class="header">USUARIOS</li>
                          <li class="body">
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 254px;"><ul class="menu tasks" style="overflow: hidden; width: auto; height: 254px;">
                                  <li>
                                    <a  href="?view=registrarUser" class=" waves-effect waves-block">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">contacts</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>REGISTRAR NUEVO ADMIN</h4>

                                        </div>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="?view=verUser"  class=" waves-effect waves-block">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">dvr</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>LISTAR ADMINISTRADORES</h4>

                                        </div>
                                    </a>
                                  </li>

                              </ul>
                            </div>
                          </li>
                          <li class="footer">
                              <a href="javascript:void(0);" class=" waves-effect waves-block">View All Tasks</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="?view=admin" >
                        INICIO<i class="material-icons">domain</i>

                      </a>

                  </li>
                  <li class="dropdown">
                      <a href="?view=admin" data-toggle="dropdown">
                        <i class="material-icons">keyboard_arrow_down</i>

                      </a>
                      <ul class="dropdown-menu pull-right " >

                          <li role="seperator" class="divider"></li>


                          <li><a href="?view=registrarUser"><i class="material-icons">person_add</i>Registrar admin</a></li>
                          <li role="seperator" class="divider"></li>
                          <li><a href="?view=salir" ><i class="material-icons">lock</i>Salir</a></li>
                      </ul>

                  </li>



                  <!-- #END# Tasks -->

              </ul>
        </div>
    </div>
</nav>
<?php }
}
?>