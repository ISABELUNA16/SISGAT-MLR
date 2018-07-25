<?php
/* Smarty version 3.1.30, created on 2017-07-14 00:19:48
  from "C:\wamp\www\SISGAT\views\templates\recetas-directassimultaneo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5967f20459b360_23167028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf64f50550510111a5cf9642403f96b72c8c134' => 
    array (
      0 => 'C:\\wamp\\www\\SISGAT\\views\\templates\\recetas-directassimultaneo.tpl',
      1 => 1499984386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5967f20459b360_23167028 (Smarty_Internal_Template $_smarty_tpl) {
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
        <span class="w3-bar-item w3-right"><img src="views/images/logo.png" width="120px" height="40px"></span>
      </div>

      <!-- CONTENIDO DE LA PAGINA-->
      <div class="w3-main">
       
        <div class="w3-row-padding w3-margin-bottom" style="margin-top:73px;">   
          <span><strong> RECETA CREADA: DIRECTA - SIMULTÁNEO  </strong><br></span>   
        </div> 

        <div class="w3-container w3-grey">
        <div class="w3-row">    
           <br>     
            <button class="w3-button w3-red" style="margin-bottom: 20px; margin-right: 5px;" onclick="location.href='?action=recetasnuevas'">Cancelar <i class="fa fa-exclamation-circle"></i></button>
            <button class="w3-button w3-green" style="margin-bottom: 20px; margin-right: 5px;"> Guardar e Imprimir <i class="fa fa-print"></i></button>
         </div>
        </div>

        <div class="panel-body w3-white">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="color: grey">
                <thead>
                    <tr>
                        <th></th>
                        <th colspan="5" class="w3-grey"><center>MRL - TINTORERIA </center></th>
                    </tr>
                    <tr>
                      <th rowspan="5"> Código de Receta</th>
                      <th class="w3-light-grey">Fecha </th>
                      <th><input class="w3-input" type="date" name=""/></th>
                      <th class="w3-light-grey">Cliente</th>
                      <th class="w3-light-grey">N°</th>
                      <th class="w3-light-grey">$</th>
                    </tr>
                    <tr>
                      <th class="w3-light-grey">Partida </th>
                      <th><input  class="w3-input" type="" name=""/></th>
                      <th><input  class="w3-input" type="" name=""/></th>
                      <th class="w3-light-grey">R.B</th>
                      <th><input  class="w3-input" type="" name=""/></th>
                    </tr>
                    <tr>
                      <th class="w3-light-grey">Color </th>
                      <th><input class="w3-input" type="text" name=""/></th>
                      <th class="w3-light-grey">Rollos</th>
                      <th class="w3-light-grey">Máquina</th>
                      <th><input class="w3-input" type="text" name=""/></th>
                    </tr>
                    <tr>
                      <th class="w3-light-grey">Curva </th>
                      <th><input class="w3-input" type="text" name=""/></th>
                      <th><input class="w3-input" type="text" name=""/></th>
                      <th class="w3-light-grey">Peso (kg)</th>
                      <th><input class="w3-input" type="text" name=""/></th>
                    </tr>
                    <tr>
                      <th class="w3-light-grey">Cod. Col </th>
                      <th><input class="w3-input" type="text" name=""/></th>
                      <th><input class="w3-input" type="text" name=""/></th>
                      <th class="w3-light-grey">Volumen (L)</th>
                      <th><input class="w3-input" type="text" name=""/></th>
                    </tr>
                    <tr>
                      <th class="w3-light-grey"> Código</th>
                      <th colspan="5" class="w3-grey"> SIMULTANEO PH 10-11 </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                   <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                  <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                   <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                
                  </tbody>
                  <tbody>
                  <tr>
                      <th colspan="6" class="w3-grey"> NEUTRALIZADO </th>
                  </tr>
                  <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                   <tr>
                      <th colspan="6" class="w3-grey"> SUAVIZADO   CHECK    PH = 6.5 </th>
                  </tr>
                  <tr class="odd gradeX">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            
                    <tr>
                      <th class="w3-light-grey">Operaciones</th>
                      <th class="w3-light-grey">Ancho Acabado</th>
                      <th colspan="4" rowspan="3" class="w3-grey"> <center>PONER SUAVIZANTE PREPARADO PARA MLR</center></th>
                    </tr>
                    <tr>
                      <td class="w3-light-grey">Hidro</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="w3-light-grey">Compactado</td>
                      <td></td>
                    </tr>
                     <tr>
                        <th class="w3-light-grey">Fecha</th>
                        <th class="w3-light-grey">Hora (Inicio/Fin)</th>
                        <th class="w3-light-grey">Operación</th>
                        <th class="w3-light-grey">Entrada</th>
                        <th class="w3-light-grey">Salida</th>
                        <th class="w3-light-grey">Operario</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>REMALLADO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>TENIDO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>HIDRO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>SECADO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>COMPACTADO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <tr>
                        <td></td>
                        <td></td>
                        <td>SPEROTO</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                 </tbody>
            </table>

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
        <?php echo '<script'; ?>
 src="views/js/dataTables.responsive.js"><?php echo '</script'; ?>
>
      
    <!--  <?php echo '<script'; ?>
>
          $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
          });
        <?php echo '</script'; ?>
> 
-->
  </body> 
</html><?php }
}
