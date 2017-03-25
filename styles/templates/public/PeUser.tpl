

{include 'overall/head.tpl'}
<body class="theme-red  ">
<!-- Page Loader -->
{include 'overall/load.tpl'}
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
{include 'overall/buscar.tpl'}
<!-- #END# Search Bar -->
<!-- Top Bar -->
{include 'overall/navbar.tpl'}
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        {include 'overall/info_user.tpl'}
        <!-- #User Info -->
        <!-- Menu -->
        {include 'overall/nav_movil.tpl'}
        <!-- #Menu -->
        <!-- Footer -->

        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

    <!-- #END# Right Sidebar -->
</section>

<section class="content">
  <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADMIN <small>Perfil</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">EDITAR</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                          {foreach from=$posts item=tp}
                          <div class="col-md-12">

                            <div class="image" >
                              <center>
                                <img  style="border-radius: 100px;"src="{$tp.fot_user}" width="200" height="200" alt="User" />
                              </center>
                            </div>

                          </div>
                          <div class="col-md-4">
                            <h5>
                                NOMBRES Y APELLIDOS:
                            </h5>
                            <p>{$tp.nom_user}  {$tp.ape_user} </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                DNI:
                            </h5>
                            <p>N°{$tp.dni_user}  </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                TÉLEFONO:
                            </h5>
                            <p>{$tp.tel_user}   </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                DIRECCIÓN:
                            </h5>
                            <p>{$tp.dir_user}   </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                TÉLEFONO:
                            </h5>
                            <p>{$tp.tel_user}   </p>
                          </div>
                          <div class="col-md-4">
                            <h5>
                                CONDICIÓN:
                            </h5>
                            <p>{$tp.con_user}   </p>
                          </div>
                          <div class="col-md-12">
                            <h5>
                                ESTADO:
                            </h5>
                            {if $tp.est_user=="ACTIVO"}
                            <p>Activo</p>
                            {else}
                            <p>Inacivo</p>
                            {/if}

                          </div>


                         Perfil de usuario administrador <b id="id" >{$tp.id_user} </b>
                        {/foreach}

                        </div>
                    </div>
                </div>





  </div>

        </div>
    </div>
</section>

{include 'overall/js_footer.tpl'}
</body>

</html>
