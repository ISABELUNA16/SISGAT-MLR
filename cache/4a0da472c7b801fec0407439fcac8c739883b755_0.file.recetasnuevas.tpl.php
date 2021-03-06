<?php
/* Smarty version 3.1.30, created on 2017-07-13 21:42:22
  from "C:\wamp\www\SISGAT\views\templates\recetasnuevas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5967cd1ee70e26_37111199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0da472c7b801fec0407439fcac8c739883b755' => 
    array (
      0 => 'C:\\wamp\\www\\SISGAT\\views\\templates\\recetasnuevas.tpl',
      1 => 1499974942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5967cd1ee70e26_37111199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
     <title>SISGAT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/principal.css">
    <link rel="stylesheet" href="views/css/font-awesome.css"> 

  </head>
  <body class="w3-light-grey">
      <!--Menu de Opciones-->
      <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="sisgat_open();"><i class="fa fa-bars"></i>  Menu</button>
       <span class="w3-bar-item w3-right"><img src="views/images/logo.png" width="120px" height="40px"></span>
      </div>

      <!--MENU -->
      <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar">
      <hr>
        <div class="w3-container">
          <span><strong> MENU DE OPCIONES</strong></span>
        </div>
        <hr>
       <div class="w3-bar-block">

          <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="sisgat_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Cerrar Menu</a>
          <a href="?action=principal" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-star "></i>  Principal</a>
          <a href="?action=proveedores" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-truck"></i>  Proveedores</a>
          <a href="?action=productos" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-flask"></i>  Productos</a>
          <a href="?action=clientes" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-users fa-fw"></i>  Clientes</a>
          <a href="?action=recetas" class="w3-bar-item w3-button w3-amber w3-padding w3-hover-blue"><i class="fa fa-clipboard fa-fw"></i> Recetas</a>
          <a href="?action=reportes" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-bar-chart "></i>  Reportes</a>
          <a href="?action=mantenimientos" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-cog fa-fw"></i>  Mantenimiento</a>
          <a href="?action=cerrarsesion" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-power-off fa-fw"></i>  Salir del Sistema</a>
         <br><br>
        </div>
      </nav>

      <!-- Overlay effect when opening sidebar on small screens -->
      <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="sisgat_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

      <!-- CONTENIDO DE LA PAGINA-->
      <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <header class="w3-container" style="padding-top:22px">
           <h5><strong>NUEVA RECETA </strong></h5>
        </header>
        <div class="w3-row-padding w3-margin-bottom"> 
        </div>
        <div class="w3-container w3-white">
          <div class="w3-row">
          <br>   
            <div class="w3-grupo w3-grey">
              <br>
              <span> <strong>Opciones</strong> de Teñido<br></span> 
              <br>
              <div class="w3-checkbox w3-white">
                  <input type="checkbox" value=""> Directos
              </div>
              <div class="w3-checkbox w3-white">
                  <input type="checkbox" value=""> Reactivo
              </div>
              <div class="w3-checkbox w3-white">
                  <input type="checkbox" value=""> Disperso
              </div>
              <br>
              <select class="w3-select">
                <option selected>   Seleccione ...</option>
                <option>Pre Blanqueo </option>
                <option>  Descrude </option>
                <option> Simultáneo</option>
                <option> Lavado</option>
                <option> Teñido</option>
                <option> Desmontado </option>
              </select>
              <br>
              <br>
              <button class="w3-button w3-blue" onclick="location.href='?action=recetas-directassimultaneo'"> Crear Receta  <i class="fa fa-table"></i></button> 
            </div>
          </div>
        </div>
      </div>
     
        <?php echo '<script'; ?>
>
          var mySidebar = document.getElementById("mySidebar");
          var overlayBg = document.getElementById("myOverlay");

          function sisgat_open() {
              if (mySidebar.style.display === 'block') {
                  mySidebar.style.display = 'none';
                  overlayBg.style.display = "none";
              } else {
                  mySidebar.style.display = 'block';
                  overlayBg.style.display = "block";
              }
          }
          function sisgat_close() {
              mySidebar.style.display = "none";
              overlayBg.style.display = "none";
          }
          
      <?php echo '</script'; ?>
>
    

  </body> 
</html><?php }
}
