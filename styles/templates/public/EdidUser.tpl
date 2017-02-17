{include 'overall/head.tpl'}
<body class="theme-red">
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
     {include 'overall/theme.tpl'}
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
          <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>UPDATE USER</h2>

                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" novalidate="novalidate">

                                                  <div id="_AJAX_">

                                                  </div>
                                                  {foreach from=$posts item=tp}
                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">

                                                                <input class="form-control" value="{$tp.id_user}" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>

                                                  <div class="col-md-6">

                                                        <div class="input-group">

                                                            <span class="input-group-addon">
                                                                <i class="material-icons">picture_in_picture</i>
                                                            </span>
                                                            <div class="form-line">

                                                                  <input class="form-control" value="{$tp.dni_user}" placeholder="Disabled" disabled="" type="text">

                                                            </div>
                                                        </div>



                                                  </div>
                                                  <div class="col-md-6">

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="nombres" value="{$tp.nom_user}" type="text" class="form-control"  placeholder="Nombres" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"> portrait</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="apellidos" value="{$tp.ape_user}"type="text" class="form-control"  placeholder="Apellidos" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phonelink_ring</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="telefono" value="{$tp.tel_user}" type="text" class="form-control"  placeholder="Teléfono"maxlength="9"  maxlength="9" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">location_on</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input id="direccion" value="{$tp.dir_user}"type="text" class="form-control"  placeholder="Dirección" required  >
                                                        </div>
                                                    </div>

                                                  </div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons">account_box</i>
                              													</span>
                              													<div class="form-line">
                              															<input id="nick" value="{$tp.nic_user}" type="text" class="form-control"  placeholder="nick de usuario" required  >
                              													</div>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons">vpn_key</i>
                              													</span>
                              													<div class="form-line">
                              															<input id="pass" value="{$tp.pas_user}" class="form-control" placeholder="contraseña" type="password">
                              													</div>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons"> portrait</i>
                              													</span>
                              													<select id="condicion"  class="form-control show-tick">
                                                                          {if $tp.con_user=="CONTRATADO"}
                                                                          <option  selected value="CONTRATADO">CONTRATADO</option>
                                                                          <option   value="NOMBRADO">NOMBRADO</option>
                                                                          {/if}
                                                                          {if $tp.con_user=="NOMBRADO"}
                              																						<option selected  value="NOMBRADO">NOMBRADO</option>
                                                                          <option   value="CONTRATADO">CONTRATADO</option>
                                                                          {/if}







                              														</select>
                              											</div>

                              										</div>
                              										<div class="col-md-6">
                              											<div class="input-group">
                              													<span class="input-group-addon">
                              															<i class="material-icons"> portrait</i>
                              													</span>
                              													<select id="estado"class="form-control show-tick" required>
                                                                          {if $tp.est_user=="1"}
                              																						<option selected value="1">ACTIVO</option>
                                                                          <option value="0">INACTIVO</option>
                                                                          {/if}
                                                                          {if $tp.est_user=="0"}
                                                                          <option value="1">ACTIVO</option>
                              																						<option selected value="0">INACTIVO</option>

                                                                          {/if}


                              														</select>
                              											</div>

                              										</div>

                                                  {/foreach}

                                                  <button id="btn" class="btn btn-block btn-lg bg-pink waves-effect" type="input">UPDATE USER</button>
                            </form>
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
