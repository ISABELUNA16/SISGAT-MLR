<?php
/* Smarty version 3.1.30, created on 2017-07-14 00:44:12
  from "C:\wamp\www\SISGAT\views\templates\productosnuevo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5967f7bc24df69_20652149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e6f0bcca56c44f85a57464e40a7620baca2231' => 
    array (
      0 => 'C:\\wamp\\www\\SISGAT\\views\\templates\\productosnuevo.tpl',
      1 => 1499984230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5967f7bc24df69_20652149 (Smarty_Internal_Template $_smarty_tpl) {
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
          <a href="?action=productos" class="w3-bar-item w3-button w3-amber w3-padding w3-hover-blue"><i class="fa fa-flask"></i>  Productos</a>
          <a href="?action=clientes" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-users fa-fw"></i>  Clientes</a>
          <a href="?action=recetas" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-clipboard fa-fw"></i> Recetas</a>
          <a href="?action=reportes" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-bar-chart "></i>  Reportes</a>
          <a href="?action=mantenimientos" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-cog fa-fw"></i>  Mantenimiento</a>
          <a href="?action=cerrarsesion" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-power-off fa-fw"></i>  Salir del Sistema</a>
         <br><br>
        </div>
      </nav>

      <!-- Overlay effect when opening sidebar on small screens -->
      <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="sisgat_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

      <!-- CONTENIDO DE LA PAGINA-->
      <!--NUEVO PRODUCTO-->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <header class="w3-container" style="padding-top:50px">
        </header>
      <div  class="w3-dark-grey w3-padding-32 w3-margin-bottom">
        <div class="w3-container">
          <h4>Nuevo <span class="w3-opacity w3-medium">Producto</span></h4>
         
          <div class="w3-row">
            <input type="text" name="" class=" w3-input w3-col m4" placeholder="Código del producto"  style="margin-right: 3px;" maxlength="15" autofocus required>
            <input type="text" name="" class="w3-input w3-col m6" placeholder="Nombre producto" maxlength="150" required> 
          </div><br>
         
          <div class="w3-row">
            <input type="text" name="" class="w3-input w3-col m5" placeholder="Proveedor" style="margin-right: 3px;" required>
            <input type="text" name="" class="w3-input w3-col m5" placeholder=" Tipo del Producto">
          </div>   <br>
         
            <div class="w3-row">         
              <input type="text" name="" class="w3-input w3-col m4" placeholder="Costo por kilogramo"  maxlength="10" style="margin-right: 3px;" required>
              <input type="text" name="" class="w3-input w3-col m4" placeholder="Cantidad" maxlength="10" style="margin-right: 3px;"> 
              <!--<input type="text" name="" class="w3-input w3-col m2" placeholder="Unidades" maxlength="10">  -->
             <!-- <select class="w3-input w3-col m2">-->
              <select class="w3-select w3-col m2">
                <option selected>Unidades .. </option>
                <option value="kg" > Kg. </option>
                <option value="lt"> Lts. </option>
                
              </select>    
            </div>
        </div> 
        <br>
          <button class="w3-button w3-blue" type="submit"> Guardar  <i class="fa fa-save"></i></button>
          <button class="w3-button w3-red" onclick="location.href='?action=productos'">Cancelar <i class="fa fa-exclamation-circle"></i></button>
      </div>
    </div>
      <!--none: ocultar, bloack : mostrar-->
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
