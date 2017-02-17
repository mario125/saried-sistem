<?php /* Smarty version 3.1.27, created on 2017-02-06 15:19:18
         compiled from "C:\xampp\htdocs\saried\pro\styles\templates\overall\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15115589885e6379621_15395718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994c777896d05eea4e6cec59bbf7904f957f3ff5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saried\\pro\\styles\\templates\\overall\\nav.tpl',
      1 => 1486301034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15115589885e6379621_15395718',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589885e640e269_21024369',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589885e640e269_21024369')) {
function content_589885e640e269_21024369 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15115589885e6379621_15395718';
?>

<div class="navbar-fixed ">
  <nav class="blue">
    <div class="nav-wrapper ">
    <!--  <a href="#!" class="brand-logo letra white-text" ><img class="circle" src="styles/galeria/cho.png"></a>-->
     <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons letra white-text">menu</i></a>
      <ul class="right hide-on-med-and-down letra ">




         <?php if (isset($_SESSION['cargo'])) {?>
         <?php if ($_SESSION['cargo'] == '1') {?>
         <li><a href="?view=registro">REGISTRAR USUARIO</a></li>
         <li><a href="?view=lista">VER USUARIO</a></li>


         <?php } else { ?>
         <li><a href="#">PERFIL</a></li>
        <li><a href="?view=usuario">JUGAR</a></li>

         <?php }?>

        <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown1"><?php echo $_SESSION['n_user'];?>
  <?php echo $_SESSION['ap_user'];?>
<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="sass.html"><?php echo $_SESSION['cargo'];?>
</a></li>
         <?php } else { ?>
       <li><a class=" white-text" href="?view=login"><i class="material-icons right">person_pin</i>LOGIN</a></li>

       <?php }?>

      </ul>

      <ul id="dropdown1" class="dropdown-content">
         <li><a href="?view=logout">salir</a></li>
         <li><a href="#!">perfil</a></li>
         <li class="divider"></li>
         <li><a href="#!">cuenta</a></li>
      </ul>
<!-- responsi -->



    </div>
  </nav>
</div>


<ul id="slide-out" class="side-nav cyan">

    <?php if (isset($_SESSION['cargo'])) {?>

      <li>
           <div class="userView">

              <center><a href="#"><img class="circle" src="styles/galeria/user.png"></a></center>
              <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown2"><?php echo $_SESSION['n_user'];?>
 <i class="material-icons right">arrow_drop_down</i></a></li>
              <a href="#"><span class="white-text email"><?php echo $_SESSION['ap_user'];?>
</span></a>
           </div>
    </li>
    <?php if ($_SESSION['cargo'] == '1') {?>

    <li><a href="?view=registro" class="white-text waves-effect">REGISTRAR USUARIO</a></li>
    <li><a href="?view=lista" class="white-text waves-effect">VER USUARIO</a></li>


    <?php } else { ?>
    <li><a href="#">PERFIL</a></li>
    <li><a href="#">JUGAR</a></li>
    <?php }?>


    <?php } else { ?>
    <li><a class=" white-text" href="?view=login" ><i class="material-icons red waves-effect">person_pin</i>login</a></li>




  <?php }?>






<ul id="dropdown2" class="dropdown-content">
   <li><a href="?view=logout">salir</a></li>
   <li><a href="#!">perfil</a></li>
   <li class="divider"></li>
   <li><a href="#!">cuenta</a></li>
</ul>

</ul>
<?php }
}
?>