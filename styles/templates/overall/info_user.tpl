<div class="user-info">
    <div class="image">
        <img src="{$smarty.session.fot_user}" width="60" height="60" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{$smarty.session.nom_user}</div>
        <div class="email">{$smarty.session.ape_user}</div>
        <div class="btn-group user-helper-dropdown">
            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
            <ul class="dropdown-menu pull-right " >
                <li><a href="?view=perfil"><i class="material-icons">account_circle</i>Perfil</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="?view=registrarBien"><i class="material-icons">create</i>Registrar bien</a></li>
                <li><a href="?view=prestarBien"><i class="material-icons">pan_tool</i>Prestar bien</a></li>
                <li><a href="?view=importarBien"><i class="material-icons" >cloud_upload</i>Importar bienes</a></li>
                <li><a href="?view=registrarUser"><i class="material-icons">person_add</i>Registrar admin</a></li>
                <li role="seperator" class="divider"></li>
                <li><a href="?view=salir" ><i class="material-icons">lock</i>Salir</a></li>
            </ul>
        </div>
    </div>
</div>
