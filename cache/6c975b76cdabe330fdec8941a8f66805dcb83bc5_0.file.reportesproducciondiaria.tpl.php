<?php
/* Smarty version 3.1.30, created on 2017-07-13 22:18:39
  from "C:\wamp\www\SISGAT\views\templates\reportesproducciondiaria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5967d59f496419_39126499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c975b76cdabe330fdec8941a8f66805dcb83bc5' => 
    array (
      0 => 'C:\\wamp\\www\\SISGAT\\views\\templates\\reportesproducciondiaria.tpl',
      1 => 1499977118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5967d59f496419_39126499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
     <title>SISGAT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/css/principal.css">
    <link rel="stylesheet" href="views/css/font-awesome.css"> 
     <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="views/css/dataTables.responsive.css" rel="stylesheet">

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
          <a href="?action=recetas" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-clipboard fa-fw"></i> Recetas</a>
          <a href="?action=reportes" class="w3-bar-item w3-button w3-amber w3-padding w3-hover-blue"><i class="fa fa-bar-chart "></i>  Reportes</a>
          <a href="?action=mantenimientos" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-cog fa-fw"></i>  Mantenimiento</a>
          <a href="?action=cerrarsesion" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-power-off fa-fw"></i>  Salir del Sistema</a>
         <br><br>
        </div>
      </nav>

      <!-- Overlay effect when opening sidebar on small screens -->
      <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="sisgat_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

      <!-- CONTENIDO DE LA PAGINA-->
      <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="sisgat_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

      <!-- CONTENIDO DE LA PAGINA-->
      <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <header class="w3-container">  
        </header>
      <div  class="w3-padding-32 w3-margin-bottom">    
      
      <!--TABLA BOOTSTRAP -->
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>LISTADO <span class="w3-opacity w3-medium">RECETAS DIARIAS </span></h4>
                        </div> <br>
                        <div class="w3-container w3-grey">
                        <div class="w3-row">    
                           <br>    
                            <div class="w3-third">
                              Fecha Inicio <input  class="w3-input" type="date" name="">
                            </div> 

                            <div class="w3-third" style="margin-left: 30px;">
                               Fecha Final <input  class="w3-input" type="date" name="">
                            </div>

                         </div>
                         <br>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="color: grey">
                                <thead class="w3-red">
                                    <tr>
                                        <th>Código</th>
                                        <th>Descripción</th>
                                        <th>Proveedor</th>
                                        <th>Marca</th>
                                        <th>Costo</th>
                                        <th>Stock</th>
                                        <th>Und</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>CD1234</td>
                                        <td>CORAZOL Black 400</td>
                                        <td>ColtexPeru </td>
                                        <td>SMS12 </td>
                                        <td>15.00</td>
                                        <td>1000</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                   <tr class="odd gradeX">
                                        <td>QM1524</td>
                                        <td>BLACK BALL 300</td>
                                        <td>Quimica Suiza </td>
                                        <td>SMS12 </td>
                                        <td>9.00</td>
                                        <td>1800</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                   <tr class="odd gradeX">
                                        <td>GT7364</td>
                                        <td>AZUL NAVY</td>
                                        <td>Pioneer SA </td>
                                        <td>JMG12 </td>
                                        <td>15.00</td>
                                        <td>10900</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                
                                  <tr class="odd gradeX">
                                        <td>CD1234</td>
                                        <td>CORAZOL Black 400</td>
                                        <td>ColtexPeru </td>
                                        <td>SMS12 </td>
                                        <td>15.00</td>
                                        <td>1000</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                   <tr class="odd gradeX">
                                        <td>QM1524</td>
                                        <td>BLACK BALL 300</td>
                                        <td>Quimica Suiza </td>
                                        <td>SMS12 </td>
                                        <td>9.00</td>
                                        <td>1800</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                   <tr class="odd gradeX">
                                        <td>CD1234</td>
                                        <td>CORAZOL Black 400</td>
                                        <td>Quimica Suiza </td>
                                        <td>SMS12 </td>
                                        <td>15.00</td>
                                        <td>1000</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>CD1234</td>
                                        <td>CORAZOL Black 400</td>
                                        <td>Quimica Suiza </td>
                                        <td>SMS12 </td>
                                        <td>15.00</td>
                                        <td>1000</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                  
                                    <tr class="odd gradeX">
                                        <td>CD1234</td>
                                        <td>CORAZOL Black 400</td>
                                        <td>ColtexPeru </td>
                                        <td>SMS12 </td>
                                        <td>15.00</td>
                                        <td>1000</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                   <tr class="odd gradeX">
                                        <td>QM1524</td>
                                        <td>BLACK BALL 300</td>
                                        <td>Quimica Suiza </td>
                                        <td>SMS12 </td>
                                        <td>9.00</td>
                                        <td>1800</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                   <tr class="odd gradeX">
                                        <td>GT7364</td>
                                        <td>AZUL NAVY</td>
                                        <td>Pioneer SA </td>
                                        <td>JMG12 </td>
                                        <td>15.00</td>
                                        <td>10900</td>
                                        <td>Kg</td>
                                        <td>Activado</td>
                                        <td>--</td>
                                    </tr>
                                  </tbody>
                            </table>
                        
                        </div>
                    </div>
                </div>
            </div>
      </div>
     
    <?php echo '<script'; ?>
 src="views/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="views/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="views/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="views/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="views/js/dataTables.responsive.js"><?php echo '</script'; ?>
>

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
        <?php echo '<script'; ?>
>
          $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
          });
        <?php echo '</script'; ?>
>

  </body> 
</html><?php }
}
